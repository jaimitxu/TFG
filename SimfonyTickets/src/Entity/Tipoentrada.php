<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoentrada
 *
 * @ORM\Table(name="tipoentrada")
 * @ORM\Entity
 */
class Tipoentrada
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
     * @ORM\Column(name="Tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="PrecioBase", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $preciobase;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getPreciobase(): ?int
    {
        return $this->preciobase;
    }

    public function setPreciobase(int $preciobase): self
    {
        $this->preciobase = $preciobase;

        return $this;
    }


}
