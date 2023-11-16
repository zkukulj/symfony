<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirPingicId
 *
 * @ORM\Table(name="turnir_pingic_id", indexes={@ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class TurnirPingicId
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
     * @ORM\Column(name="pingic", type="string", length=100, nullable=true)
     */
    private $pingic;

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

    public function getPingic(): ?string
    {
        return $this->pingic;
    }

    public function setPingic(?string $pingic): self
    {
        $this->pingic = $pingic;

        return $this;
    }


}
