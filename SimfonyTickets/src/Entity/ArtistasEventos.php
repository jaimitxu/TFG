<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtistasEventos
 *
 * @ORM\Table(name="artistas_eventos", indexes={@ORM\Index(name="artista_id", columns={"artista_id"}), @ORM\Index(name="evento_id", columns={"evento_id"})})
 * @ORM\Entity
 */
class ArtistasEventos
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
     * @var \Eventos
     *
     * @ORM\ManyToOne(targetEntity="Eventos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evento_id", referencedColumnName="Id")
     * })
     */
    private $evento;

    /**
     * @var \Artistas
     *
     * @ORM\ManyToOne(targetEntity="Artistas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artista_id", referencedColumnName="Id")
     * })
     */
    private $artista;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getArtista(): ?Artistas
    {
        return $this->artista;
    }

    public function setArtista(?Artistas $artista): self
    {
        $this->artista = $artista;

        return $this;
    }


}
