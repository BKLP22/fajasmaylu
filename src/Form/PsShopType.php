<?php

namespace App\Form;

use App\Entity\PsShop;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PsShopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idShopGroup')
            ->add('name')
            ->add('idCategory')
            ->add('themeName')
            ->add('active')
            ->add('deleted')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PsShop::class,
        ]);
    }
}
