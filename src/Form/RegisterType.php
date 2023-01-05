<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Merci de saisir prénom'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'votre email',
                'attr' => [
                    'placeholder' => 'example@email.com'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => 'votre mot de passe',
                'attr' => [
                    'placeholder' => 'Choisissez un mot de passe',
                ]

            ])
            ->add('password_confirm', PasswordType::class, [
                'label' => 'confirmer votre mot de passe',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'confirmer votre mot de passe',
                ]

            ])

            ->add('submit', SubmitType::class, [
                'label' => " S'inscrire"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
