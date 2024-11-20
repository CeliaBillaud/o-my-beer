<?php

namespace App\Form;

use App\Entity\Brand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BrandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "empty_data" => "",
                'label' => 'Nom',
            ])
            ->add('description', TextareaType::class)
            ->add('image', UrlType::class, [
                "attr" => 
                ['placeholder' => 'https://img.freepik.com/photos-premium/bouteille-eau-gazeuse-verte-eclaboussure-pris-seance-photo-professionnelle-isolee_1094804-106.jpg?w=740']
            ])
            ->add('country',TextType::class, [
                'label' => 'Pays',
            ])
            ->add('founded_in', DateType::class, [
                'label' => 'Créée le',
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Brand::class,
        ]);
    }
}
