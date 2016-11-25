<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

class TodoEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pattern = 'c%';

        $builder->remove('category')
            ->add('is_completed', CheckboxType::class, array('required' => false))

        ;

    }
    public function getParent()
    {
        return TodoType::class;
    }

    public function getName()
    {
        return 'app_bundle_todo_type';
    }
}
