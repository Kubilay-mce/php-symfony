<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Dernek;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class DernekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('category', EntityType::class,[
                'class' => Category::class,
                'choice_label'=>'title',
            ])
            ->add('title')
            ->add('keywords')
            ->add('description')
            ->add('image', FileType::class,[
                'label'=>'Dernek Main Image',
                'mapped'=>false,
                'required'=>false,
                'constraints'=> [
                    new File([
                        'maxSize'=>'1024k',
                        'mimeTypes'=> [
                            'image/*'
                        ],
                        'mimeTypesMessage'=>'Please upload a valid Image File'
                    ])
                ],
            ])
            ->add('star', ChoiceType::class,[
                'choices'=>[
                    '1 Star'=>'1',
                    '2 Star'=>'2',
                    '3 Star'=>'3',
                    '4 Star'=>'4',
                    '5 Star'=>'1',
                ],
            ])
            ->add('adress')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('city')
            ->add('country',ChoiceType::class,[
                'choices'=>[
                    'Turkiye'=>'Turkiye',
                    'Azerbeycan'=>'Azerbeycan',
                    'Kazakistan'=>'Kazakistan',
                    'Turkmenistan'=>'Turkmenistan',
                ],
            ])
            ->add('city',ChoiceType::class,[
                'choices'=>[
                    'Ankara'=>'Ankara',
                    'Istanbul'=>'Istanbul',
                    'Elazıg'=>'Elazıg',
                    'Bıskek'=>'Bıskek',
                ],
            ])
            ->add('location')
            ->add('detail', CKEditorType::class,array(
                'config'=>array(
                    'uiColor'=>'#ffffff',
                ),
            ))
            ->add('status' ,ChoiceType::class,[
                'choices'=>[
                    'True'=>'True',
                    'False'=>'False',
                ],
            ])
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dernek::class,
            'csrf_protection'=>false,
        ]);
    }
}
