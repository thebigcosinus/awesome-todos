<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\GenderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class ContactController
 * @package AppBundle\Controller
 */
class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/contact", name="contact_form")
     * @Method({"GET", "POST"})
     */
    public function contactAction(Request $request)
    {
        $translator = $this->get('translator');

        $defaultData =  array('message' => $translator->trans('contact.default_message'));

        $form = $this->createFormBuilder($defaultData)
            ->add('firstname', TextType::class, array('constraints' => new Length(array('min' =>3))))
            ->add('lastname', TextType::class, array('constraints' =>array( new NotBlank(array('groups' => array('create', 'update'))),new Length(array('min' =>3)))))
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class)
            ->add('gender', GenderType::class)
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            return $this->redirectToRoute("todo_list");
        }
        return $this->render('contact/contact.html.twig', array('form' => $form->createView()));
    }
}
