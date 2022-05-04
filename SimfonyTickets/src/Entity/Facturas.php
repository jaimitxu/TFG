<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas")
 * @ORM\Entity
 */
class Facturas
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
     * @var string|null
     *
     * @ORM\Column(name="Observaciones", type="text", length=0, nullable=true)
     */
    private $observaciones;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CosteTotal", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $costetotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaFacturacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechafacturacion = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getCostetotal(): ?int
    {
        return $this->costetotal;
    }

    public function setCostetotal(?int $costetotal): self
    {
        $this->costetotal = $costetotal;

        return $this;
    }

    public function getFechafacturacion(): ?\DateTimeInterface
    {
        return $this->fechafacturacion;
    }

    public function setFechafacturacion(\DateTimeInterface $fechafacturacion): self
    {
        $this->fechafacturacion = $fechafacturacion;

        return $this;
    }


}
