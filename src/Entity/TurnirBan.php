<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirBan
 *
 * @ORM\Table(name="turnir_ban", indexes={@ORM\Index(name="IGRAC1", columns={"IGRAC"})})
 * @ORM\Entity
 */
class TurnirBan
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
     * @var string|null
     *
     * @ORM\Column(name="IGRAC", type="string", length=100, nullable=true)
     */
    private $igrac;

    public function getId(): ?int
    {
        return $this->id;
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


}
