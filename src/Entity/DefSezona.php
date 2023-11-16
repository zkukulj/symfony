<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefSezona
 *
 * @ORM\Table(name="def_sezona", indexes={@ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class DefSezona
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
     * @ORM\Column(name="sezona", type="string", length=50, nullable=true)
     */
    private $sezona;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSezona(): ?string
    {
        return $this->sezona;
    }

    public function setSezona(?string $sezona): self
    {
        $this->sezona = $sezona;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }


}
