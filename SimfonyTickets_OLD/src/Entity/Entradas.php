<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Facturas;

/**
 * Entradas
 *
 * @ORM\Table(name="entradas", indexes={@ORM\Index(name="Evento_id", columns={"Evento_id"}), @ORM\Index(name="Usuario_id", columns={"Usuario_id"}), @ORM\Index(name="Butaca_id", columns={"Butaca_id"}), @ORM\Index(name="TipoEntrada_id", columns={"TipoEntrada_id"}), @ORM\Index(name="Factura_id", columns={"Factura_id"}), @ORM\Index(name="Promocion_id", columns={"Promocion_id"})})
 * @ORM\Entity
 */
class Entradas
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
     * @var \Facturas
     *
     * @ORM\ManyToOne(targetEntity="Facturas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Factura_id", referencedColumnName="Id")
     * })
     */
    private $factura;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Usuario_id", referencedColumnName="Id")
     * })
     */
    private $usuario;

    /**
     * @var \Promociones
     *
     * @ORM\ManyToOne(targetEntity="Promociones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Promocion_id", referencedColumnName="Id")
     * })
     */
    private $promocion;

    /**
     * @var \Butacas
     *
     * @ORM\ManyToOne(targetEntity="Butacas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Butaca_id", referencedColumnName="Id")
     * })
     */
    private $butaca;

    /**
     * @var \Tipoentrada
     *
     * @ORM\ManyToOne(targetEntity="Tipoentrada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoEntrada_id", referencedColumnName="Id")
     * })
     */
    private $tipoentrada;

    /**
     * @var \Eventos
     *
     * @ORM\ManyToOne(targetEntity="Eventos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Evento_id", referencedColumnName="Id")
     * })
     */
    private $evento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactura(): ?Facturas
    {
        return $this->factura;
    }

    public function setFactura(?Facturas $factura): self
    {
        $this->factura = $factura;

        return $this;
    }

    public function getUsuario(): ?Usuarios
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuarios $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getPromocion(): ?Promociones
    {
        return $this->promocion;
    }

    public function setPromocion(?Promociones $promocion): self
    {
        $this->promocion = $promocion;

        return $this;
    }

    public function getButaca(): ?Butacas
    {
        return $this->butaca;
    }

    public function setButaca(?Butacas $butaca): self
    {
        $this->butaca = $butaca;

        return $this;
    }

    public function getTipoentrada(): ?Tipoentrada
    {
        return $this->tipoentrada;
    }

    public function setTipoentrada(?Tipoentrada $tipoentrada): self
    {
        $this->tipoentrada = $tipoentrada;

        return $this;
    }

    public function getEvento(): ?Eventos
    {
        return $this->evento;
    }

    public function setEvento(?Eventos $evento): self
    {
        $this->evento = $evento;

        return $this;
    }


}
