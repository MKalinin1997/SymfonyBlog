<?php


namespace App\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom recette'],
                'label' => false,
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Description recette'],
                'label' => false,
            ])
            ->add('temps', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Temps recette'],
                'label' => false,
            ])
            ->add('difficulte', ChoiceType::class, [
                'choices'  => [
                    'Facile' => 'facile',
                    'Moyen' => 'moyen',
                    'Difficile' => 'difficile',
                    'Inconnu' => 'inconnu',
                ],
                'placeholder' => 'Difficulté recette',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('parts', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nombre de parts'],
                'label' => false,
            ])
//            ->add('categorie', EntityType::class, [
//                'class' => Categorie::class,
//                'placeholder' => 'Catégorie recette',
//            ])
        ;

        $builder->add('sousrecettes', CollectionType::class, [
            'entry_type' => SousRecetteType::class,
            'entry_options' => ['label' => false],
            'allow_add' => true,
        ]);

    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults([
//            'data_class' => Recette::class,
//        ]);
//    }
}