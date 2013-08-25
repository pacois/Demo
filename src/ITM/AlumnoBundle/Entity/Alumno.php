<?php

namespace ITM\AlumnoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumnos")
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=36)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=45)
     */
    private $apellido_paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=45)
     */
    private $apellido_materno;

    /** @ORM\ManyToOne(targetEntity="ITM\CarreraBundle\Entity\Carrera") 
     *  @ORM\JoinColumn(name="carrera", referencedColumnName="id")
     */
    private $carrera;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alumno
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido_paterno
     *
     * @param string $apellidoPaterno
     * @return Alumno
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellido_paterno = $apellidoPaterno;
    
        return $this;
    }

    /**
     * Get apellido_paterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    /**
     * Set apellido_materno
     *
     * @param string $apellidoMaterno
     * @return Alumno
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellido_materno = $apellidoMaterno;
    
        return $this;
    }

    /**
     * Get apellido_materno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    /**
     * Set carrera
     *
     * @param ITM\CarreraBundle\Entity\Carrera $carrera
     */
    public function setCarrera(\ITM\CarreraBundle\Entity\Carrera $carrera)
    {
        $this->carrera = $carrera;
    }

    /**
     * Get carrera
     *
     * @return ITM\CarreraBundle\Entity\Carrera 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
