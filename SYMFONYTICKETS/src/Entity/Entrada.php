<?php

namespace App\Entity;

use App\Repository\EntradaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntradaRepository::class)]
class Entrada
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $tipo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $rangoEdad;

    #[ORM\Column(type: 'date', nullable: true)]
    private $fechaEntrada;

    #[ORM\ManyToOne(targetEntity: Eventos::class, inversedBy: 'entradas')]
    #[ORM\JoinColumn(nullable: false)]
    private $evento_id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'entradas')]
    private $usuario_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getRangoEdad(): ?string
    {
        return $this->rangoEdad;
    }

    public function setRangoEdad(?string $rangoEdad): self
    {
        $this->rangoEdad = $rangoEdad;

        return $this;
    }

    public function getFechaEntrada(): ?\DateTimeInterface
    {
        return $this->fechaEntrada;
    }

    public function setFechaEntrada(?\DateTimeInterface $fechaEntrada): self
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    public function getEventoId(): ?Eventos
    {
        return $this->evento_id;
    }

    public function setEventoId(?Eventos $evento_id): self
    {
        $this->evento_id = $evento_id;

        return $this;
    }

    public function getUsuarioId(): ?User
    {
        return $this->usuario_id;
    }

    public function setUsuarioId(?User $usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }
}
