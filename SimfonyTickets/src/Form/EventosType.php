<?php

namespace App\Form;

use App\Entity\Eventos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tipo')
            ->add('entradilla')
            ->add('descripcion')
            ->add('imagen')
            ->add('cartel')
            ->add('fechaInicio')
            ->add('fechaFin')
            ->add('duracion')
            ->add('fechaCreacion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eventos::class,
        ]);
    }
}
