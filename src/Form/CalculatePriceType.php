<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CalculatePriceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('products', EntityType::class, [
                'label' => 'Products',
                'class' => Products::class,
                'choice_label' => 'name_product',
            ])

            ->add('coupons', TextType::class, [
                'label' => 'Coupons',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
            ])

            ->add('taxes', TextType::class, [
                'label' => 'Taxes',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
            ])

            /* ->add('total_amount', TextType::class, [
                'label' => 'Total amount',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
            ])*/

            ->add('button', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
