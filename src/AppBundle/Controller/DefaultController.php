<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Label;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

class DefaultController extends Controller
{

    /**
     * Usually you will be validating entire objects. But sometimes,
     * you just want to validate a simple value - like to verify that a string is a valid email address.
     * This is actually pretty easy to do
     * https://symfony.com/doc/3.1/validation/raw_values.html
     * @Route("/validaterawvalue/{email}", name="validaterawvalue")
     */
    public function validateRawValueAction($email)
    {
        $emailConstraint = new Assert\Email();

        $emailConstraint->message = "Invalid email address";

        $errorList = $this->get('validator')->validate($email,$emailConstraint);

        if ( 0 === count($errorList)) {
            $errorMessage = "";
        } else {
            $errorMessage = (string) $errorList;
        }

        return new Response($errorList);

    }

    /**
     * @Route("/variables", name="variables")
     */
    public function variablesAction()
    {
        return $this->render(
            'default/variables.html.twig',
            [
                'kernel.cache_dir' => $this->getParameter('kernel.cache_dir'),
                'kernel.root_dir' => $this->getParameter('kernel.root_dir'),
                'kernel.environment' => $this->getParameter(
                    'kernel.environment'
                ),
                'kernel.debug' => $this->getParameter('kernel.debug'),
                'kernel.name' => $this->getParameter('kernel.name'),
                'kernel.logs_dir' => $this->getParameter('kernel.logs_dir'),
            ]
        );

    }

    /**
     * @param $name
     * @Security("has_role('ROLE_USER')")
     */
    public function helloAction($name)
    {
        $this->denyAccessUnlessGranted(
            'ROLE_USER',
            null,
            'Unable to access this page'
        );
        if (!$this->get('security.authorization_checker')->isGranted(
            'IS_AUTHENTICATED_FULLY'
        )
        ) {
            throw $this->createAccessDeniedException();
        }

    }

    /**
     * @return Response
     * @Route("/admin", name="admin_route")
     */
    public function adminAction()
    {
        return new Response('You must be admin');
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

        $form = $this->createForm(
            TaskType::class,
            $task,
            array(
                'action' => $this->generateUrl('new_route'),
                'method' => 'POST',
            )
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();

            return $this->redirectToRoute('target_route');
        }

        return $this->render(
            'default/new.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig',
            [
                'base_dir' => realpath(
                        $this->getParameter('kernel.root_dir').'/..'
                    ).DIRECTORY_SEPARATOR,
            ]
        );
    }
}
