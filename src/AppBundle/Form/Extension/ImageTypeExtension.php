<?php

namespace AppBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 16/11/16
 * Time: 07:57
 */
class ImageTypeExtension extends AbstractTypeExtension
{

    public function getExtendedType()
    {
        return FileType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('image_path'));
    }

    public function buildView(
        FormView $view,
        FormInterface $form,
        array $options
    ) {
       
        if (isset($options['image_path'])) {
            $parentData = $form->getParent()->getData();
            
            $imageUrl = null;
            
            if (null !== $parentData) {
                $accessor = PropertyAccess::createPropertyAccessor();
                $imageUrl = $accessor->getValue($parentData, $options['image_url']);
                
            }
            $view->vars['image_url'] = $imageUrl;
        }
        
    }
}
