<?php

namespace SI\AppBundle\Form;

use SI\AppBundle\Entity\Product;
use SI\AppBundle\Entity\ProductOption;
use SI\AppBundle\Entity\Status;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProductOptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', EntityType::class, array(
                'class'=> Status::class,
                'choice_label' => 'label',
                'multiple' => false,
                'expanded' => true,
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SI\AppBundle\Entity\ProductOption'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'si_appbundle_productoption';
    }


}
