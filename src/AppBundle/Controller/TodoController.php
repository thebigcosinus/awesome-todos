<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Todo;
use AppBundle\Form\Type\TodoEditType;
use AppBundle\Form\Type\TodoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/todolist/web", name="todo_list")
     * @Method("GET")
     */
    public function listAction(Request $request) {
        $todos = $this->getDoctrine()->getRepository('AppBundle:Todo')->findAll();
        dump($todos);
        return $this->render('todo/index.html.twig', array(
            'todos' => $todos
        ));
    }

    /**
     * @param Request $request
     * @Route("/todos/create" ,name="todo_create")
     * @Method({"GET","POST"})
     */
    public function createAction(Request $request)
    {
        $translator = $this->translator();

        $todo = new Todo();
        
        $form = $this->createForm(TodoType::class, $todo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Todo $todo */
            $todo = $form->getData();
            $todo->setCreator($this->getUser());
            $em = $this->getDoctrine()->getManager();

            $em->persist($todo);
            $em->flush();

            $this->addFlash('notice', $translator->trans('todo.notice.added_success'));
            return $this->redirectToRoute('todo_list');
        }

        return $this->render('todo/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/todos/details/{id}", name="todo_details", requirements={"id"="\d+"})
     * @ParamConverter("todo", class="AppBundle:Todo")
     * @Method({"GET"})
     */
    public function detailsAction(Todo $todo, Request $request)
    {

        return $this->render(
            'todo/details.html.twig',
            [
             'todo' => $todo   ,
            ]
        );
    }

    /**
     * @route("/todos/edit/{id}", name="todo_edit", requirements={"id"="\d+"})
     * @ParamConverter("todo", class="AppBundle:Todo")
     * @Method({"GET","POST"})
     */
    public function editAction(Todo $todo, Request $request) {

        $translator = $this->translator();

        $form = $this->createForm(TodoEditType::class, $todo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Todo $todo */
            $todo = $form->getData();

            

            $todo->setUpdatedAt(new \DateTime());
            
            $em = $this->getDoctrine()->getManager();

            $em->flush();

            $this->addFlash('notice', $translator->trans('todo.notice.updated_success'));

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
     * @route("/todos/delete/{id}", name="todo_delete", requirements={"id"="\d+"})
     * @ParamConverter("todo",class="AppBundle:Todo")
     */
    public function deleteAction(Todo $todo) {
        $translator = $this->translator();
        $em = $this->getDoctrine()->getManager();

        $em->remove($todo);
        
        $em->flush();

        $this->addFlash('notice', $translator->trans('todo.notice.removed_success'));

        return $this->redirectToRoute('todo_list');
    }


    private function translator()
    {
        return $this->get('translator');
    }
}
