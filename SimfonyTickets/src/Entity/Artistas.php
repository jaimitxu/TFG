<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artistas
 *
 * @ORM\Table(name="artistas")
 * @ORM\Entity
 */
class Artistas
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
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Genero_musical", type="string", length=255, nullable=true)
     */
    private $generoMusical;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="text", length=0, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Notas", type="text", length=0, nullable=true)
     */
    private $notas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getGeneroMusical(): ?string
    {
        return $this->generoMusical;
    }

    public function setGeneroMusical(?string $generoMusical): self
    {
        $this->generoMusical = $generoMusical;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getNotas(): ?string
    {
        return $this->notas;
    }

    public function setNotas(?string $notas): self
    {
        $this->notas = $notas;

        return $this;
    }


}
