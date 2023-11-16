<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mechevi
 *
 * @ORM\Table(name="mechevi", indexes={@ORM\Index(name="IGRAC1", columns={"IGRAC1", "IGRAC2", "SETOVI1", "SETOVI2", "MECH"}), @ORM\Index(name="IGRAC1_2", columns={"IGRAC1"}), @ORM\Index(name="IGRAC2", columns={"IGRAC2"}), @ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class Mechevi
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
     * @ORM\Column(name="IGRAC1", type="string", length=100, nullable=true)
     */
    private $igrac1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IGRAC2", type="string", length=100, nullable=true)
     */
    private $igrac2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SETOVI1", type="integer", nullable=true)
     */
    private $setovi1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SETOVI2", type="integer", nullable=true)
     */
    private $setovi2;

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

    public function getIgrac1(): ?string
    {
        return $this->igrac1;
    }

    public function setIgrac1(?string $igrac1): self
    {
        $this->igrac1 = $igrac1;

        return $this;
    }

    public function getIgrac2(): ?string
    {
        return $this->igrac2;
    }

    public function setIgrac2(?string $igrac2): self
    {
        $this->igrac2 = $igrac2;

        return $this;
    }

    public function getSetovi1(): ?int
    {
        return $this->setovi1;
    }

    public function setSetovi1(?int $setovi1): self
    {
        $this->setovi1 = $setovi1;

        return $this;
    }

    public function getSetovi2(): ?int
    {
        return $this->setovi2;
    }

    public function setSetovi2(?int $setovi2): self
    {
        $this->setovi2 = $setovi2;

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
