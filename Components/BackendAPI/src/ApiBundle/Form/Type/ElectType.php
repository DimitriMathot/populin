<?php

namespace ApiBundle\Form\Type;

use ApiBundle\Entity\Elect;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ElectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$data = $builder->getData();

        $builder
            ->add(
                'firstName',
                TextType::class,
                [
                    'label' => 'elect.fields.first_name',
                    'required' => true,
                ]
            )
            ->add(
                'lastName',
                TextType::class,
                [
                    'label' => 'elect.fields.last_name',
                    'required' => true,
                ]
            )
            ->add(
                'gender',
                ChoiceType::class,
                [
                    'label' => 'elect.fields.gender',
                    'choices' => [
                        'M' => 'elect.choices.gender.male',
                        'F' => 'elect.choices.gender.female'
                    ],
                    'required' => true,
                ]
            )
            ->add(
                'birthDate',
                DateTimeType::class,
                [
                    'label' => 'elect.fields.birth_date',
                    'required' => true,
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'translation_domain' => 'elect',
                'data_class' => Elect::class,
            ]
        );
    }

    public function getName()
    {
        return 'api_elect_type';
    }
}
