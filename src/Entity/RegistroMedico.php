<?php

namespace App\Entity;

use App\Repository\RegistroMedicoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegistroMedicoRepository::class)]
class RegistroMedico
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?paciente $paciente = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?enfermero $enfermero = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaRegistro = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 3)]
    private ?string $peso = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 3)]
    private ?string $altura = null;

    #[ORM\Column(length: 255)]
    private ?string $dieta = null;

    #[ORM\Column(nullable: true)]
    private ?int $oxigeno = null;

    #[ORM\Column(nullable: true)]
    private ?int $indiceNorton = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 3)]
    private ?string $temperatura = null;

    #[ORM\Column(nullable: true)]
    private ?int $presionArterialSistolica = null;

    #[ORM\Column(nullable: true)]
    private ?int $presionArterialDiastolica = null;

    #[ORM\Column(nullable: true)]
    private ?int $frequenciaRespiratoria = null;

    #[ORM\Column(nullable: true)]
    private ?int $frequenciaCardiaca = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 3, nullable: true)]
    private ?string $balanceHidrico = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $otros = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaciente(): ?paciente
    {
        return $this->paciente;
    }

    public function setPaciente(?paciente $paciente): static
    {
        $this->paciente = $paciente;

        return $this;
    }

    public function getEnfermero(): ?enfermero
    {
        return $this->enfermero;
    }

    public function setEnfermero(?enfermero $enfermero): static
    {
        $this->enfermero = $enfermero;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(\DateTimeInterface $fechaRegistro): static
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    public function getPeso(): ?string
    {
        return $this->peso;
    }

    public function setPeso(string $peso): static
    {
        $this->peso = $peso;

        return $this;
    }

    public function getAltura(): ?string
    {
        return $this->altura;
    }

    public function setAltura(string $altura): static
    {
        $this->altura = $altura;

        return $this;
    }

    public function getDieta(): ?string
    {
        return $this->dieta;
    }

    public function setDieta(string $dieta): static
    {
        $this->dieta = $dieta;

        return $this;
    }

    public function getOxigeno(): ?int
    {
        return $this->oxigeno;
    }

    public function setOxigeno(?int $oxigeno): static
    {
        $this->oxigeno = $oxigeno;

        return $this;
    }

    public function getIndiceNorton(): ?int
    {
        return $this->indiceNorton;
    }

    public function setIndiceNorton(?int $indiceNorton): static
    {
        $this->indiceNorton = $indiceNorton;

        return $this;
    }

    public function getTemperatura(): ?string
    {
        return $this->temperatura;
    }

    public function setTemperatura(string $temperatura): static
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    public function getPresionArterialSistolica(): ?int
    {
        return $this->presionArterialSistolica;
    }

    public function setPresionArterialSistolica(?int $presionArterialSistolica): static
    {
        $this->presionArterialSistolica = $presionArterialSistolica;

        return $this;
    }

    public function getPresionArterialDiastolica(): ?int
    {
        return $this->presionArterialDiastolica;
    }

    public function setPresionArterialDiastolica(?int $presionArterialDiastolica): static
    {
        $this->presionArterialDiastolica = $presionArterialDiastolica;

        return $this;
    }

    public function getFrequenciaRespiratoria(): ?int
    {
        return $this->frequenciaRespiratoria;
    }

    public function setFrequenciaRespiratoria(?int $frequenciaRespiratoria): static
    {
        $this->frequenciaRespiratoria = $frequenciaRespiratoria;

        return $this;
    }

    public function getFrequenciaCardiaca(): ?int
    {
        return $this->frequenciaCardiaca;
    }

    public function setFrequenciaCardiaca(?int $frequenciaCardiaca): static
    {
        $this->frequenciaCardiaca = $frequenciaCardiaca;

        return $this;
    }

    public function getBalanceHidrico(): ?string
    {
        return $this->balanceHidrico;
    }

    public function setBalanceHidrico(?string $balanceHidrico): static
    {
        $this->balanceHidrico = $balanceHidrico;

        return $this;
    }

    public function getOtros(): ?string
    {
        return $this->otros;
    }

    public function setOtros(?string $otros): static
    {
        $this->otros = $otros;

        return $this;
    }
}
