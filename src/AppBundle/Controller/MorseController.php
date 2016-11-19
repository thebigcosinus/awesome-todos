<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class MorseController extends Controller
{
    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/morse", name="morse_test")
     */
    public function indexAction()
    {
        $default = array('time'=>4, 'questions' =>20);
        $form = $this->createFormBuilder($default)
            ->add('time', TextType::class)
            ->add('questions', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();
        return $this->render('morse/index.html.twig', array('form' => $form->createView()));
    }
}
