<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('image',FileType::class, array('data_class' => null,
            'required' => true,
            'constraints' => [
                new Assert\NotBlank(['message' => 'Please upload an image.']),
                new Assert\File([
                    'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'],
                    'mimeTypesMessage' => 'Please upload a valid image file (JPEG, PNG, GIF, JPG).',
                ]),
            ],
            ))
            ->add('nom')
            ->add('prix')
            ->add('datepost')
            ->add('detail')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
