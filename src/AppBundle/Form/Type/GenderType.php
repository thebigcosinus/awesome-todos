<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 15/11/16
 * Time: 21:44
 */
class GenderType extends  AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           'choices' => array(
               'm' => 'Male',
               'f' => 'Female'
           )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
