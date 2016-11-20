<?php

namespace AppBundle\Form;

use AppBundle\Entity\Task;
use AppBundle\Form\Type\CategoryType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 15/11/16
 * Time: 20:55
 */
class TaskType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('task')
            ->add('dueDate', null, array('widget' => 'single_text'))
            ->add('isActive', CheckboxType::class)
            ->add('terms', CheckboxType::class, array('mapped' => false))
            ->add('type', TextType::class)
            ->add('tags', TextType::class)
            ->add('category', CategoryType::class)
            ->add('description', TextType::class)
            ->add(
                'label',
                CollectionType::class,
                array(
                    'entry_type' => LabelType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'attr' => array('class' => 'my-selector')
                )
            )
            ->add('save', SubmitType::class);

        $builder->get('tags')
            ->addModelTransformer(
                new CallbackTransformer(
                    function ($tagsAsArray) {
                        return implode(', ', $tagsAsArray);
                    },
                    function ($tagsAsString) {
                        return explode(', ', $tagsAsString);
                    }
                )
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Task',
                'csrf_protection' => true,
                'csrf_field_name' => '_token',
                //a unique key to help generate the secret token
                'csrf_token_id' => 'task_item',
                /*'validation_groups' => array(
                    'AppBundle\Entity\Task',
                    'determineValidationGroups'
                )*/
                'validation_groups' => function (FormInterface $form) {
                    $date = $form->getData();

                    if (Task::TYPE_PRIVATE === $date->getType()) {
                        return array('private');

                    }

                    return array('public');
                },
            )
        );
    }


}
