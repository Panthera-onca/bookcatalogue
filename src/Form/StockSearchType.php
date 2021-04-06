<?php

namespace App\Form;

use App\Entity\Livre;
use App\Entity\Site;
use App\Entity\Stock;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_modification', DatetimeType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Date de modification'
                ]
            ])
            ->add('site', EntityType::class, [
                'class' => Site::class,
                'choice_label' => function ($site){
                    return $site->getCampus();
                }
            ])
            ->add('livre', EntityType::class, [
                'class' => Livre::class,
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'livre']
            ])
            ->add('quantite_stock', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'quantite']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'rechercher'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
}
