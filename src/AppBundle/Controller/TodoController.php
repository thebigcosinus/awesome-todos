<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/todolist/web", name="todo_list")
     */
    public function listAction(Request $request) {
        $todos = $this->getDoctrine()->getRepository('AppBundle:Todo')->findAll();
        
        return $this->render('todo/index.html.twig', array(
            'todos' => $todos
        ));
    }

    /**
     * @param Request $request
     * @Route("/todos/create" ,name="todo_create")
     */
    public function createAction(Request $request)
    {
        $todo = new Todo();

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'Low', 'Normal' => 'Normal', 'High'=>'High'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('Save', SubmitType::class, array('label'=> 'Create Todo', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm()
        ;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $todo = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($todo);
            $em->flush();

            $this->addFlash('notice', 'Todo Added');
            return $this->redirectToRoute('todo_list');
        }

        return $this->render('todo/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/todos/details/{id}", name="todo_details")
     * @ParamConverter("todo", class="AppBundle:Todo")
     */
    public function detailsAction(Todo $todo, Request $request)
    {
        /*$todo = $this->getDoctrine()->getRepository('AppBundle:Todo')
            ->find($id);*/

        return $this->render(
            'todo/details.html.twig',
            [
             'todo' => $todo   ,
            ]
        );

    }

    /**
     * @route("/todos/edit/{id}", name="todo_edit")
     * @ParamConverter("todo", class="AppBundle:Todo")
     */
    public function editAction(Todo $todo, Request $request) {
        $new  = new \DateTime('now');

        //$todo = $this->getDoctrine()->getRepository('AppBundle:Todo')->find($id);

        $todo->setCreateDate(new \DateTime());

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))

            ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('Save', SubmitType::class, array('label'=> 'Update Todo', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm()
            ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $todo = $form->getData();
            $em = $this->getDoctrine()->getManager();

            $em->flush();

            $this->addFlash('notice', 'Todo updated');

            return $this->redirectToRoute('todo_list');
        }

        return $this->render(
            'todo/edit.html.twig',
            [
                'todo' => $todo,
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @param $id
     * @route("/todos/delete/{id}", name="todo_delete")
     * @ParamConverter("todo",class="AppBundle:Todo")
     */
    public function deleteAction(Todo $todo) {
        $em = $this->getDoctrine()->getManager();
        //$todo = $em->getRepository('AppBundle:Todo')->find($id);

        $em->remove($todo);
        $em->flush();

        $this->addFlash('notice', 'Todo Removed');

        return $this->redirectToRoute('todo_list');
    }
}
