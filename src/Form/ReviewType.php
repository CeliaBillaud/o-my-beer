<?php

namespace App\Form;

use App\Entity\Beer;
use App\Entity\User;
use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('content', TextareaType::class, [
                "label" => "Qu'avez-vous pensé de cette bière ?",
                "attr" => [
                    "placeholder" => "Cette bière est excellente !"
                ]
            ])
            ->add('rating', ChoiceType::class, [
                "label" => "Votre note",
                "choices" => [
                    "5" => 5.00,
                    "4" => 4.00,
                    "3" => 3.00,
                    "2" => 2.00,
                    "1" => 1.00
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
