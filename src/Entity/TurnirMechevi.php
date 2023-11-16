<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirMechevi
 *
 * @ORM\Table(name="turnir_mechevi", indexes={@ORM\Index(name="SETOVI", columns={"SETOVI", "MECH"}), @ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class TurnirMechevi
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
     * @ORM\Column(name="IGRAC", type="string", length=100, nullable=true)
     */
    private $igrac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SETOVI", type="integer", nullable=true)
     */
    private $setovi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MECH", type="integer", nullable=true)
     */
    private $mech;

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

    public function getIgrac(): ?string
    {
        return $this->igrac;
    }

    public function setIgrac(?string $igrac): self
    {
        $this->igrac = $igrac;

        return $this;
    }

    public function getSetovi(): ?int
    {
        return $this->setovi;
    }

    public function setSetovi(?int $setovi): self
    {
        $this->setovi = $setovi;

        return $this;
    }

    public function getMech(): ?int
    {
        return $this->mech;
    }

    public function setMech(?int $mech): self
    {
        $this->mech = $mech;

        return $this;
    }


}
