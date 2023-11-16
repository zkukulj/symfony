<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RangLista
 *
 * @ORM\Table(name="rang lista", indexes={@ORM\Index(name="POINTS", columns={"POINTS", "IGRAC", "mjesto"}), @ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class RangLista
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
     * @var int|null
     *
     * @ORM\Column(name="POINTS", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IGRAC", type="string", length=100, nullable=true)
     */
    private $igrac;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mjesto", type="integer", nullable=true)
     */
    private $mjesto;

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

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): self
    {
        $this->points = $points;

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

    public function getMjesto(): ?int
    {
        return $this->mjesto;
    }

    public function setMjesto(?int $mjesto): self
    {
        $this->mjesto = $mjesto;

        return $this;
    }


}
