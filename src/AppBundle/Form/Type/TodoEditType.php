<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TodoEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pattern = 'c%';

        $builder->remove('category');
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
