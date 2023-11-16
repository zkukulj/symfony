<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefBodovi
 *
 * @ORM\Table(name="def_bodovi", indexes={@ORM\Index(name="lang", columns={"bod"}), @ORM\Index(name="sa", columns={"nr"})})
 * @ORM\Entity
 */
class DefBodovi
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
     * @var int|null
     *
     * @ORM\Column(name="nr", type="smallint", nullable=true)
     */
    private $nr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bod", type="integer", nullable=true)
     */
    private $bod;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBod(): ?int
    {
        return $this->bod;
    }

    public function setBod(?int $bod): self
    {
        $this->bod = $bod;

        return $this;
    }


}
