<?php

namespace ITM\CarreraBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ITM\CarreraBundle\Entity\Carrera;

class Carreras extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $careras = array(
            array('nombre' => 'Ingeniería Industrial'),
            array('nombre' => 'Ingeniería en Logística'),
            array('nombre' => 'Ingeniería Mecatrónica'),
            array('nombre' => 'Ingeniería Mecánica'),
            array('nombre' => 'Ingeniería Sistemas Computacionales'),
            array('nombre' => 'Ingeniería en Gestión Empresarial'),
            array('nombre' => 'Ingenieria en Informática'),
            array('nombre' => 'Ingenieria en Energías Renovables'),
            array('nombre' => 'Ingeniería Electrónica'),
            array('nombre' => 'Ingeniería Química'),
            array('nombre' => 'Ingeniería Eléctrica')
        );

        foreach ($careras as $carrera) {
            $entidad = new Carrera();
            $entidad->setNombre($carrera['nombre']);
            $manager->persist($entidad);
        }
        
        $manager->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}