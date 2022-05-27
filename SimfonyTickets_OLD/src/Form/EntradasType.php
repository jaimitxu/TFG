<?php

namespace App\Form;

use App\Entity\Entradas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntradasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('factura')
            ->add('usuario')
            ->add('promocion')
            ->add('butaca')
            ->add('tipoentrada')
            ->add('evento')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entradas::class,
        ]);
    }
}
