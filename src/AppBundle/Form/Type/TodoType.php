<?php

namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TodoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class)
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:Category',
                'multiple' => false,
                'choice_label' => 'display'
            ))
            ->add(
                'description',
                TextareaType::class,
                array('required' => false)
            )
            ->add(
                'due_date',
                DateTimeType::class,
                array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => array(
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy',
                    ),
                )
            )
            ->add('labels', CollectionType::class, array(
                'entry_type' => LabelType::class,
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('is_public', CheckboxType::class, array('required' => false))
            ->add('save', SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Todo',
            )
        );

    }

    public function getName()
    {
        return 'app_bundle_todo_type';
    }
}
