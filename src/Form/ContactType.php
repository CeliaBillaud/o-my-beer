<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "label" => "Nom",
                "constraints" => [
                    new NotBlank(['message' => 'Merci d\'indiquer votre nom.']),
                ],
                
            ])
            ->add('email',EmailType::class, [
                "label" => "Email",
                "constraints" => [
                    new NotBlank(['message' => 'Merci d\'indiquer votre email.']),
                    new Email(['message' => 'Email invalide.'])
                ],
            ])
            ->add('content', TextareaType::class, [
                "label" => "Votre message",
                "attr" => [
                    "placeholder" => "Votre site est super ! J'ai une question concernant..."
                ],
                "constraints" => [
                    new NotBlank(['message' => 'Merci de remplir le contenu de votre message.']),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
