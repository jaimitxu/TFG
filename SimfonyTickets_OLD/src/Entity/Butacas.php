<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Butacas
 *
 * @ORM\Table(name="butacas", indexes={@ORM\Index(name="Zona_id", columns={"Zona_id"})})
 * @ORM\Entity
 */
class Butacas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fila", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $fila;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Columna", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $columna;

    /**
     * @var \Zonas
     *
     * @ORM\ManyToOne(targetEntity="Zonas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Zona_id", referencedColumnName="Id")
     * })
     */
    private $zona;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFila(): ?int
    {
        return $this->fila;
    }

    public function setFila(?int $fila): self
    {
        $this->fila = $fila;

        return $this;
    }

    public function getColumna(): ?int
    {
        return $this->columna;
    }

    public function setColumna(?int $columna): self
    {
        $this->columna = $columna;

        return $this;
    }

    public function getZona(): ?Zonas
    {
        return $this->zona;
    }

    public function setZona(?Zonas $zona): self
    {
        $this->zona = $zona;

        return $this;
    }


}
