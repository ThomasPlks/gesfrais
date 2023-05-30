<?php

namespace App\Form;

use App\Entity\Frais;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FraisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('frais')
            ->add('datecreation')
            ->add('fraisdate')
            ->add('datemaj')
            ->add('fraistype')
            ->add('fraisuser')
            ->add('gestuser')
            ->add('fichier')
            ->add('etat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Frais::class,
        ]);
    }
}
