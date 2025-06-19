<?php

namespace App\Form;

use App\Entity\Band;
use App\Entity\Festival;
use App\Enum\MusicGenre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BandForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('musicGenre', EnumType::class, [
                'class' => MusicGenre::class,
                'label' => 'Genre',
                'choice_label' => fn(MusicGenre $genre) => $genre->name,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Band::class,
        ]);
    }
}
