<?php

namespace ITM\AlumnoBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ITM\AlumnoBundle\Entity\Alumno;

class Alumnos extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $carrera = $manager->getRepository('CarreraBundle:Carrera')->find(5);
        
        $alumnos = array(
            array('nombre' => 'ROGELIO', 'app' => 'MALDONADO', 'apm' => 'CEJA'),
            array('nombre' => 'ROSALINO LORENZO', 'app' => 'GARCIA', 'apm' => 'ACEBEDO'),
            array('nombre' => 'ESTREBERTO', 'app' => 'DURON', 'apm' => 'MANRIQUEZ'),
            array('nombre' => 'ERNESTO', 'app' => 'AVILEZ', 'apm' => 'PERALTA'),
            array('nombre' => 'GUILLERMO', 'app' => 'VELASCO', 'apm' => 'GUERRA'),
            array('nombre' => 'CATARINO', 'app' => 'OLEA', 'apm' => 'ROJAS'),
            array('nombre' => 'PLACIDO GERINO', 'app' => 'GARCIA', 'apm' => 'RAMOS'),
            array('nombre' => 'PEDRO', 'app' => 'PEREZ', 'apm' => 'CORRALES'),
            array('nombre' => 'ADELINA', 'app' => 'DANIELS', 'apm' => 'GAYTAN'),
            array('nombre' => 'CONSUELO', 'app' => 'MORENO', 'apm' => 'SALINAS'),
            array('nombre' => 'EVA', 'app' => 'PEREZ', 'apm' => 'HERNANDEZ')  
        );

        foreach ($alumnos as $alumno) {
            $entidad = new Alumno();
            $entidad->setNombre($alumno['nombre']);
            $entidad->setApellidoPaterno($alumno['app']);
            $entidad->setApellidoMaterno($alumno['apm']);
            $entidad->setCarrera($carrera);
            $manager->persist($entidad);
        }
        
        $manager->flush();
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}