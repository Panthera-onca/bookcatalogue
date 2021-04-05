<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Filiere;
use App\Entity\Livre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('titre_livre')
            ->add('auteur')
            ->add('resume')
            ->add('ref_eni')
            ->add('isbn')
            ->add('filiere', EntityType::class, [
                'class' => Filiere::class,
                'choice_label' => function ($filiere) {
                    return $filiere->getNomFiliere();
                }])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => function ($categorie) {
                    return $categorie->getNomCategorie();
                }]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
