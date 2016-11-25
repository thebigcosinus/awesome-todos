<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Todo;
use AppBundle\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TodoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pattern = 'c%';

        $builder->add('name', TextType::class)
            /* ->add('attachments', EntityType::class, array(
                 'class' => 'AppBundle:Attachment'
             ))*/
            //->add('attachments', AttachmentType::class)
            ->add(
                'category',
                EntityType::class,
                array(
                    'class' => 'AppBundle:Category',
                    'multiple' => false,
                    'expanded' => false,
                    'choice_label' => 'display',
                    'query_builder' => function (CategoryRepository $repository
                    ) use ($pattern) {
                        return $repository->getLikeQueryBuilder($pattern);
                    },
                )
            )
            ->add(
                'description',
                TextareaType::class,
                array('required' => false)
            )
            ->add(
                'due_date',
                DateTimeType::class,
                array(
                    'required' => false,
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => array(
                        'class' => 'form-control input-inline datepicker',
                        'data-provide' => 'datepicker',
                        'data-date-format' => 'dd-mm-yyyy',
                    ),
                )
            )
            ->add(
                'labels',
                CollectionType::class,
                array(
                    'entry_type' => LabelType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                )
            )
            ->add(
                'notes',
                CollectionType::class,
                array(
                    'entry_type' => NoteType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false
                )
            )
            //->add('is_public', CheckboxType::class, array('required' => false))
            ->add('save', SubmitType::class);

        /**
         * Dans un objectif didactique on va tester l utilsiation des evement PRE-SET_DATA
         * Si la tache est marquée comme public on ne pourra plus modifier le champs
         */
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                /** @var Todo $todo */
                $todo = $event->getData();
                if (null === $todo) {
                    return;
                }
                if ($todo->getId() === null || $todo->getPublic()) {
                    $event->getForm()->add(
                        'public',
                        CheckboxType::class,
                        array('required' => false)
                    );
                } else {
                    $event->getForm()->remove('public');
                }
            }
        );
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
