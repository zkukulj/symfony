<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirCash
 *
 * @ORM\Table(name="turnir_cash", indexes={@ORM\Index(name="IGRAC1", columns={"IGRAC"}), @ORM\Index(name="KLIENTNR", columns={"KPERSID"}), @ORM\Index(name="KORISNIK", columns={"KORISNIK"}), @ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class TurnirCash
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
     * @ORM\Column(name="KPERSID", type="integer", nullable=true)
     */
    private $kpersid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KORISNIK", type="integer", nullable=true)
     */
    private $korisnik;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TURNIRID", type="integer", nullable=true)
     */
    private $turnirid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IGRAC", type="string", length=100, nullable=true)
     */
    private $igrac;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="godkjen", type="boolean", nullable=true)
     */
    private $godkjen = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKpersid(): ?int
    {
        return $this->kpersid;
    }

    public function setKpersid(?int $kpersid): self
    {
        $this->kpersid = $kpersid;

        return $this;
    }

    public function getKorisnik(): ?int
    {
        return $this->korisnik;
    }

    public function setKorisnik(?int $korisnik): self
    {
        $this->korisnik = $korisnik;

        return $this;
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

    public function getIgrac(): ?string
    {
        return $this->igrac;
    }

    public function setIgrac(?string $igrac): self
    {
        $this->igrac = $igrac;

        return $this;
    }

    public function getGodkjen(): ?bool
    {
        return $this->godkjen;
    }

    public function setGodkjen(?bool $godkjen): self
    {
        $this->godkjen = $godkjen;

        return $this;
    }


}
