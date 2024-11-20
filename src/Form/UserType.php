<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class, [
                "label" => "Email",
            ])
            ->add('username', TextType::class, [
                "label" => "Nom d'utilisateur",
            ]);

            if ($options["custom_option"] === "backCreate" || $options["custom_option"] === "frontRegister") {
                $builder->add('password', RepeatedType::class, [
                "type" => PasswordType::class,
                "first_options" => [
                    "label" => "Mot de passe",
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci d\'entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                    new Regex([
                        'pattern' => '/\d/',
                        'match' => true,
                        'message' => 'Votre mot de passe doit contenir au moins un nombre',
                    ]),
                    ],
                ],
                "second_options" => [
                    "label" => "Répétez le mot de passe",
                ],
                ]);
            };

            if ($options["custom_option"] === "backCreate" || $options["custom_option"] === "backEdit") {
            $builder->add('roles', ChoiceType::class, [
                "label" => "Roles",
                "choices" => [
                    "Administrateur" => "ROLE_ADMIN",
                    "Utilisateur" => "ROLE_USER"
                ],
                "expanded" => true,
                "multiple" => true,
                // To display the user role prechecked but to avoid any possible modification (default role)
                "choice_attr" => function($value) {
                        if ($value === "ROLE_USER") {
                            return ['disabled' => 'disabled'];
                        }
                    return [];
                }
            ]);
            }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'custom_option' => 'default',
        ]);
    }

    
}
