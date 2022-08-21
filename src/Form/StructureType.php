<?php

namespace App\Form;

use App\Entity\Structure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StructureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add('managerFirstname', TextType::class)
            ->add('managerLastname', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('address', TextType::class)
            ->add('active', ChoiceType::class, [
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false
                ]
            ])
            ->add('sellFood', ChoiceType::class, [
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false
                ]
            ])
            ->add('sellDrink', ChoiceType::class, [
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false
                ]
            ])
            ->add('sendNewsletter', ChoiceType::class, [
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false
                ]
            ])
            ->add('scheduleManagement', ChoiceType::class, [
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false
                ]
            ])
            ->add('privateLesson', ChoiceType::class, [
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false
                ]
            ])
            ->add('technicalTeamId')
            ->add('partnerId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Structure::class,
        ]);
    }
}
