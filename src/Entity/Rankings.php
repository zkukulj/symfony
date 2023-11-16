<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rankings
 *
 * @ORM\Table(name="rankings", indexes={@ORM\Index(name="POINTS", columns={"POINTS", "IGRAC", "mjesto"}), @ORM\Index(name="TURNIRID", columns={"tour_nr"})})
 * @ORM\Entity
 */
class Rankings
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
     * @ORM\Column(name="mjesto", type="integer", nullable=true)
     */
    private $mjesto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IGRAC", type="string", length=100, nullable=true)
     */
    private $igrac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="POINTS", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tour_nr", type="integer", nullable=true)
     */
    private $tourNr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eff", type="decimal", precision=20, scale=4, nullable=true)
     */
    private $eff;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMjesto(): ?int
    {
        return $this->mjesto;
    }

    public function setMjesto(?int $mjesto): self
    {
        $this->mjesto = $mjesto;

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

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getTourNr(): ?int
    {
        return $this->tourNr;
    }

    public function setTourNr(?int $tourNr): self
    {
        $this->tourNr = $tourNr;

        return $this;
    }

    public function getEff(): ?string
    {
        return $this->eff;
    }

    public function setEff(?string $eff): self
    {
        $this->eff = $eff;

        return $this;
    }


}
