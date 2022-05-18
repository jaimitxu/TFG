<?php

namespace App\Entity;

use App\Repository\ArtistasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistasRepository::class)]
class Artistas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $name;

    #[ORM\ManyToOne(targetEntity: GenerosMusicales::class, inversedBy: 'artista')]
    private $generosMusicales;

    #[ORM\Column(type: 'blob', nullable: true)]
    private $imagen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    public function getGenerosMusicales(): ?GenerosMusicales
    {
        return $this->generosMusicales;
    }

    public function setGenerosMusicales(?GenerosMusicales $generosMusicales): self
    {
        $this->generosMusicales = $generosMusicales;

        return $this;
    }
    public function __toString()
    {
        return $this->generosMusicales;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }
}
