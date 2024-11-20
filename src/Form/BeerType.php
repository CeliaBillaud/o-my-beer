<?php

namespace App\Form;

use App\Entity\Beer;
use App\Entity\Brand;
use App\Entity\Type;
use App\Entity\User;
use Faker\Core\Number;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BeerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ["label" => "Nom :",
            "attr" => ["placeholder" => "Nom de la bière"]])
            ->add('style', TextType::class, ["label" => "Style :",
            "attr" => ["placeholder" => "Style de la bière"]])
            ->add('hop', TextType::class, ["label" => "Houblon :",
            "attr" => ["placeholder" => "Houblon"]])
            ->add('yeast', TextType::class, ["label" => "Levure :",
            "attr" => ["placeholder" => "Levure"]])
            ->add('malts', TextType::class, ["label" => "Malt :",
            "attr" => ["placeholder" => "Malt"]])
            ->add('ibu', IntegerType::class, 
            ["label" => "Indice d'amertume :",
            "attr" => ["placeholder" => "Compris entre 5 et 120"],
            ])
            ->add('alcohol', NumberType::class, ["label" => "Degré d'alcool :",
            "attr" => ["placeholder" => "Compris entre 1 et 20"]])
            ->add('blg',  NumberType::class, ["label" => "Sucrosité :",
            "attr" => ["placeholder" => "Comprise entre 5 et 25"]])
            ->add('brand', EntityType::class, [ "label" => "Marque :",
                'class' => Brand::class,
                'choice_label' => 'name',
            ])
            ->add('type', EntityType::class, [ "label" => "Type :",
                'class' => Type::class,
                'choice_label' => 'name',
            ])
            ->add('image', UrlType::class, ["label" => "Image :",
                "attr" => 
                ['placeholder' => 'https://img.freepik.com/photos-premium/bouteille-eau-gazeuse-verte-eclaboussure-pris-seance-photo-professionnelle-isolee_1094804-106.jpg?w=740']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Beer::class,
        ]);
    }
}
