<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirTv
 *
 * @ORM\Table(name="turnir_tv", indexes={@ORM\Index(name="aktiv", columns={"aktiv"}), @ORM\Index(name="lang", columns={"tourtyp"}), @ORM\Index(name="sa", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class TurnirTv
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="on_tv", type="string", length=80, nullable=true)
     */
    private $onTv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TURNIRID", type="integer", nullable=true)
     */
    private $turnirid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tourtyp", type="integer", nullable=true)
     */
    private $tourtyp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="aktiv", type="boolean", nullable=true)
     */
    private $aktiv = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="of_type", type="smallint", nullable=true)
     */
    private $ofType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOnTv(): ?string
    {
        return $this->onTv;
    }

    public function setOnTv(?string $onTv): self
    {
        $this->onTv = $onTv;

        return $this;
    }

    public function getTurnirid(): ?int
    {
        return $this->turnirid;
    }

    public function setTurnirid(?int $turnirid): self
    {
        $this->turnirid = $turnirid;

        return $this;
    }

    public function getTourtyp(): ?int
    {
        return $this->tourtyp;
    }

    public function setTourtyp(?int $tourtyp): self
    {
        $this->tourtyp = $tourtyp;

        return $this;
    }

    public function getAktiv(): ?bool
    {
        return $this->aktiv;
    }

    public function setAktiv(?bool $aktiv): self
    {
        $this->aktiv = $aktiv;

        return $this;
    }

    public function getOfType(): ?int
    {
        return $this->ofType;
    }

    public function setOfType(?int $ofType): self
    {
        $this->ofType = $ofType;

        return $this;
    }


}
