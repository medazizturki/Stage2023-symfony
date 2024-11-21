<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Regex;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')     
            ->add('prenom')  
            ->add('sexe', ChoiceType::class, [
                'choices'  => [
                    'choisi' => 'choisi',
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Autres ..' => 'Autres ..',
                ],]) 
            ->add('age')      
            ->add('abonnement',ChoiceType::class,[
                'label'=>'abonnement',
                'choices' => [
                    '1 Moins' => '1',
                    '3 Moins' => '3',
                    '5 Moins' => '5',
                ],
                'expanded' => true,
                'multiple' => false,
    
                ])
            ->add('datedebut')
            ->add('email', EmailType::class)
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'client' => 'client',
                ],
                'expanded' => true,
                'multiple' => true,
                'required' => true,
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
            new Regex('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{14,}$/',"IL faut un mot de passe de 14 caractères avec 1 Majuscule,1 Minuscule,1 Chiffre et 1 caractère spécial") 
                ],
            ])
            
            
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
