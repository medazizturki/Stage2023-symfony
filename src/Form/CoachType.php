<?php

namespace App\Form;

use App\Entity\Coach;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'choisi' => 'choisi',
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Autres ..' => 'Autres ..',
                ],
            ])
            ->add('age')
            ->add('contrat', ChoiceType::class, [
                'label' => 'contrat',
                'choices' => [
                    '1 Month' => '1',
                    '3 Months' => '3',
                    '5 Months' => '5',
                ],
                'expanded' => true,
                'multiple' => false,
                'required' => true,
            ])
            ->add('datedebut')
            ->add('email', EmailType::class)
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'coach' => 'coach',
                ],
                'expanded' => true,
                'multiple' => true,
                'required' => true,
                'data' => ['coach'], // Définir 'coach' comme valeur par défaut
            ])
            ->add('password', HiddenType::class, [
                'data' => 'password',
            ]);

        // Add event listener to modify datefin based on contrat choice
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $user = $event->getData();
            $form = $event->getForm();
        
            if ($user->getContrat() === '1') {
                $dateFin = new \DateTime('+1 month');
                $user->setDatefin($dateFin);
            } elseif ($user->getContrat() === '3') {
                $dateFin = new \DateTime('+3 months');
                $user->setDatefin($dateFin);
            } elseif ($user->getContrat() === '5') {
                $dateFin = new \DateTime('+5 months');
                $user->setDatefin($dateFin);
            }
        
            // Réenregistrer les modifications dans le formulaire
            $event->setData($user);
        });
       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coach::class,
        ]);
    }
}
