<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefTypes
 *
 * @ORM\Table(name="def_types")
 * @ORM\Entity
 */
class DefTypes
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
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="structure", type="text", length=16777215, nullable=true)
     */
    private $structure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jsfile", type="string", length=150, nullable=true)
     */
    private $jsfile;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lastCh", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastch = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStructure(): ?string
    {
        return $this->structure;
    }

    public function setStructure(?string $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    public function getJsfile(): ?string
    {
        return $this->jsfile;
    }

    public function setJsfile(?string $jsfile): self
    {
        $this->jsfile = $jsfile;

        return $this;
    }

    public function getLastch(): ?\DateTimeInterface
    {
        return $this->lastch;
    }

    public function setLastch(?\DateTimeInterface $lastch): self
    {
        $this->lastch = $lastch;

        return $this;
    }


}
