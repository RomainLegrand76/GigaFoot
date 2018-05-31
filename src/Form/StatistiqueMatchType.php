<?php

namespace App\Form;

use App\Entity\Stats;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StatistiqueMatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cou_id_id', IntegerType::class)
            ->add('sta_goal', IntegerType::class)
            ->add('sta_possesion', IntegerType::class)
            ->add('sta_framedshoot', IntegerType::class)
            ->add('sta_stop', IntegerType::class)
            ->add('sta_offside', IntegerType::class)
            ->add('sta_fault', IntegerType::class)
            ->add('sta_yallowcardboard', IntegerType::class)
            ->add('sta_redcardboard', IntegerType::class)
            ->add('sta_pastfail', IntegerType::class)
            ->add('sta_pastsuccess', IntegerType::class)
            ->add('sta_assist', IntegerType::class)
            ->add('sta_notframedshoot', IntegerType::class)
            ->add('sta_date', DateTimeType::class)
            ->add('Envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stats::class,
        ]);
    }
}
