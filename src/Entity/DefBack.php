<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefBack
 *
 * @ORM\Table(name="def_back")
 * @ORM\Entity
 */
class DefBack
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
     * @ORM\Column(name="back", type="text", length=16777215, nullable=true)
     */
    private $back;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBack(): ?string
    {
        return $this->back;
    }

    public function setBack(?string $back): self
    {
        $this->back = $back;

        return $this;
    }


}
