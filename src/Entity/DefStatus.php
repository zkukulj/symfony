<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefStatus
 *
 * @ORM\Table(name="def_status", indexes={@ORM\Index(name="lang", columns={"lang"}), @ORM\Index(name="sa", columns={"nr"})})
 * @ORM\Entity
 */
class DefStatus
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
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nr", type="smallint", nullable=true)
     */
    private $nr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lang", type="integer", nullable=true)
     */
    private $lang;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    public function getLang(): ?int
    {
        return $this->lang;
    }

    public function setLang(?int $lang): self
    {
        $this->lang = $lang;

        return $this;
    }


}
