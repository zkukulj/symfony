<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefSports
 *
 * @ORM\Table(name="def_sports")
 * @ORM\Entity
 */
class DefSports
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
     * @ORM\Column(name="lang", type="string", length=50, nullable=true)
     */
    private $lang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="typecode", type="smallint", nullable=true)
     */
    private $typecode;

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

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getTypecode(): ?int
    {
        return $this->typecode;
    }

    public function setTypecode(?int $typecode): self
    {
        $this->typecode = $typecode;

        return $this;
    }


}
