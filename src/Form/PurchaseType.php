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

class PurchaseType extends AbstractType
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
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^([a-z]{1}[0-9]{2})?$/i',
                        'message' => 'The form contains an invalid number'
                    ]),
                ],
            ])

            ->add('taxes', TextType::class, [
                'label' => 'Taxes',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^([a-z]{2}([a-z|0-9]{2})?[0-9]{9})?$/i',
                        'message' => 'The form contains an invalid number'
                    ]),
                ],
            ])



            ->add('button', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
