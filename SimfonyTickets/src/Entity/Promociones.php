<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promociones
 *
 * @ORM\Table(name="promociones")
 * @ORM\Entity
 */
class Promociones
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
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="DescuentoPorcentaje", type="integer", nullable=false)
     */
    private $descuentoporcentaje;

    /**
     * @var int
     *
     * @ORM\Column(name="DescuentoBase", type="integer", nullable=false)
     */
    private $descuentobase;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescuentoporcentaje(): ?int
    {
        return $this->descuentoporcentaje;
    }

    public function setDescuentoporcentaje(int $descuentoporcentaje): self
    {
        $this->descuentoporcentaje = $descuentoporcentaje;

        return $this;
    }

    public function getDescuentobase(): ?int
    {
        return $this->descuentobase;
    }

    public function setDescuentobase(int $descuentobase): self
    {
        $this->descuentobase = $descuentobase;

        return $this;
    }


}
