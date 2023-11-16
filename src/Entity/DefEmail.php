<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefEmail
 *
 * @ORM\Table(name="def_email", indexes={@ORM\Index(name="lang", columns={"port"}), @ORM\Index(name="sa", columns={"nr"})})
 * @ORM\Entity
 */
class DefEmail
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
     * @ORM\Column(name="unm", type="string", length=50, nullable=true)
     */
    private $unm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pwd", type="string", length=50, nullable=true)
     */
    private $pwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="srvr", type="string", length=50, nullable=true)
     */
    private $srvr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nr", type="smallint", nullable=true)
     */
    private $nr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnm(): ?string
    {
        return $this->unm;
    }

    public function setUnm(?string $unm): self
    {
        $this->unm = $unm;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(?string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getSrvr(): ?string
    {
        return $this->srvr;
    }

    public function setSrvr(?string $srvr): self
    {
        $this->srvr = $srvr;

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

    public function getPort(): ?int
    {
        return $this->port;
    }

    public function setPort(?int $port): self
    {
        $this->port = $port;

        return $this;
    }


}
