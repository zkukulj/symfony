<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefOnTv
 *
 * @ORM\Table(name="def_on_tv", indexes={@ORM\Index(name="lang", columns={"tourtyp"}), @ORM\Index(name="sa", columns={"nr"})})
 * @ORM\Entity
 */
class DefOnTv
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
     * @ORM\Column(name="nr", type="smallint", nullable=true)
     */
    private $nr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tourtyp", type="integer", nullable=true)
     */
    private $tourtyp;

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

    public function getNr(): ?int
    {
        return $this->nr;
    }

    public function setNr(?int $nr): self
    {
        $this->nr = $nr;

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
