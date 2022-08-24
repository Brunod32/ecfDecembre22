<?php

namespace App\Form;

use App\Entity\Partner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('address', TextType::class)
            ->add('active', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
            ])
            ->add('description', TextareaType::class)
            ->add('sellFood', CheckboxType::class, [
                'label' => 'Vente de nourriture',
                'required' => false,
            ])
            ->add('sellDrink', CheckboxType::class, [
                'label' => 'Vente de boisson',
                'required' => false,
            ])
            ->add('sendNewsletter', CheckboxType::class, [
                'label' => 'Envoi de newsletter',
                'required' => false,
            ])
            ->add('scheduleManagement', CheckboxType::class, [
                'label' => 'Gestion planning',
                'required' => false,
            ])
            ->add('privateLesson', CheckboxType::class, [
                'label' => 'Cours particulier',
                'required' => false,
            ])
            ->add('technicalTeamId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partner::class,
        ]);
    }
}
