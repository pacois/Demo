<?php

namespace ITM\AlumnoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido_paterno')
            ->add('apellido_materno')
            ->add('carrera')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITM\AlumnoBundle\Entity\Alumno'
        ));
    }

    public function getName()
    {
        return 'itm_alumnobundle_alumnotype';
    }
}
