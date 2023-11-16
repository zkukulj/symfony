<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirGalerija
 *
 * @ORM\Table(name="turnir_galerija", indexes={@ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class TurnirGalerija
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TURNIRID", type="integer", nullable=true)
     */
    private $turnirid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SLIKE", type="text", length=0, nullable=true)
     */
    private $slike;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSlike(): ?string
    {
        return $this->slike;
    }

    public function setSlike(?string $slike): self
    {
        $this->slike = $slike;

        return $this;
    }


}
