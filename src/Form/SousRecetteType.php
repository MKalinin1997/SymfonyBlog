<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SousRecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom sous recette'],
                'label' => false,
            ]);

//        $builder->add('ustensiles', CollectionType::class, [
//            'entry_type' => UstensileType::class,
//            'entry_options' => ['label' => false],
//            'allow_add' => true,
//        ]);
//
//        $builder->add('ingredients', CollectionType::class, [
//            'entry_type' => IngredientType::class,
//            'entry_options' => ['label' => false],
//            'allow_add' => true,
//        ]);
//
//        $builder->add('etapes', CollectionType::class, [
//            'entry_type' => EtapeType::class,
//            'entry_options' => ['label' => false],
//            'allow_add' => true,
//        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        $resolver->setDefaults([
//            'data_class' => SousRecette::class,
//        ]);
    }
}