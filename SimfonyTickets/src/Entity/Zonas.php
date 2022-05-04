<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonas
 *
 * @ORM\Table(name="zonas", indexes={@ORM\Index(name="Sala_id", columns={"Sala_id"})})
 * @ORM\Entity
 */
class Zonas
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
     * @var \Salas
     *
     * @ORM\ManyToOne(targetEntity="Salas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Sala_id", referencedColumnName="Id")
     * })
     */
    private $sala;

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

    public function getSala(): ?Salas
    {
        return $this->sala;
    }

    public function setSala(?Salas $sala): self
    {
        $this->sala = $sala;

        return $this;
    }


}
