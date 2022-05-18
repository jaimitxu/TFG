<?php

namespace App\Entity;

use App\Repository\GenerosMusicalesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenerosMusicalesRepository::class)]
class GenerosMusicales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $nombre;

    #[ORM\OneToMany(mappedBy: 'generosMusicales', targetEntity: Artistas::class)]
    private $artista;

    public function __construct()
    {
        $this->artista = new ArrayCollection();
    }

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
    
    public function __toString()
    {
        return $this->nombre;
    }

    /**
     * @return Collection<int, artistas>
     */
    public function getArtista(): Collection
    {
        return $this->artista;
    }

    public function addArtistum(artistas $artistum): self
    {
        if (!$this->artista->contains($artistum)) {
            $this->artista[] = $artistum;
            $artistum->setGenerosMusicales($this);
        }

        return $this;
    }

    public function removeArtistum(artistas $artistum): self
    {
        if ($this->artista->removeElement($artistum)) {
            // set the owning side to null (unless already changed)
            if ($artistum->getGenerosMusicales() === $this) {
                $artistum->setGenerosMusicales(null);
            }
        }

        return $this;
    }

}
