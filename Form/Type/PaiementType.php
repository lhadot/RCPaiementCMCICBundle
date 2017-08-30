<?php
namespace RC\PaiementCMCICBundle\Form\Type;

use RC\PaiementCMCICBundle\Entity\Paiement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('version', HiddenType::class)
            ->add('TPE', HiddenType::class)
            ->add('date', HiddenType::class)
            ->add('montant', HiddenType::class)
            ->add('reference', HiddenType::class)
            ->add('MAC', HiddenType::class)
            ->add('url_retour', HiddenType::class)
            ->add('url_retour_ok', HiddenType::class)
            ->add('url_retour_err', HiddenType::class)
            ->add('lgue', HiddenType::class)
            ->add('societe', HiddenType::class)
            ->add('mail', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Paiement::class,
        ));
    }

    public function getName()
    {
        return '';
    }

    public function getBlockPrefix() {
        return null;
    }
}