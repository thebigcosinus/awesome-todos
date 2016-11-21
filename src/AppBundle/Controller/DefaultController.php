<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Label;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use AppBundle\Form\Type\GenderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class DefaultController extends Controller
{

    /**
     * @param $name
     * @Security("has_role('ROLE_USER')")
     */
    public function helloAction($name)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null,'Unable to access this page');
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

    }
    /**
     * @return Response
     * @Route("/admin", name="admin_route")
     */
    public function adminAction() {
        return new Response('You must be admin');
    }
    /**
     * @Route("/contact", name="")
     */
    public function contactAction(Request $request)
    {
        $defaultData =  array('message' => 'Type your message here');

        $form = $this->createFormBuilder($defaultData)
            ->add('name', TextType::class, array('constraints' => new Length(array('min' =>3))))
            ->add('lastname', TextType::class, array('constraints' =>array( new NotBlank(array('groups' => array('create', 'update'))),new Length(array('min' =>3)))))
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class)
            ->add('gender', GenderType::class)
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->redirectToRoute('target_route');
        }

        return $this->render(
            'default/contact.html.twig',
            [
                'form' => $form->createView(),
            ]
        );

    }

    /**
     * @Route("/test", name="target_route")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     */
    public function testAction()
    {
        return new Response('Fomulaire valide');
    }
    /**
     * @Route("/", name="new_route")
     */
    public function newAction(Request $request)
    {
        $task = new Task();
        $task->setTask('Write a blog Post');
        $task->setDueDate(new \DateTime('tomorrow'));
        $task->setTags(array('toto'));

        $label1 = new Label();
        $label1->setName('lb1');

        $label2 = new Label();
        $label2->setName('lb2');

        $task->getLabel()->add($label1);
        $task->getLabel()->add($label2);

//        $form = $this->createFormBuilder($task)
//            ->setAction($this->generateUrl('target_route'))
//            ->add('task', TextType::class, array('attr' => array('maxlength' => 5)))
//            ->add('dueDate', DateType::class, array('widget' => 'single_text', 'required' => false))
//            ->add('isActive', CheckboxType::class, array('label' => 'toto', 'required' => false))
//            ->add('save', SubmitType::class, array('label' => 'Create Post'))
//            ->getForm();

        $form = $this->createForm(TaskType::class, $task, array(
            'action' => $this->generateUrl('new_route'),
            'method' => 'POST'
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            return $this->redirectToRoute('target_route');
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
