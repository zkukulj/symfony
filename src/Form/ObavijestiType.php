<?php

namespace App\Form;

use App\Entity\Obavijesti;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObavijestiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('klientnr')
            ->add('korisnici')
            ->add('naziv')
            ->add('status')
            ->add('lokacija')
            ->add('datOd')
            ->add('datDo')
            ->add('chtime')
            ->add('sentNewsletter')
            ->add('ordretotalinkl')
            ->add('odobreno')
            ->add('odgOsoba')
            ->add('opis')
            ->add('opisNl')
            ->add('turnirid')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Obavijesti::class,
        ]);
    }
}
