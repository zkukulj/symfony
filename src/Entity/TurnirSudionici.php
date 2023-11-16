<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurnirSudionici
 *
 * @ORM\Table(name="turnir_sudionici", indexes={@ORM\Index(name="IGRAC1", columns={"IGRAC"}), @ORM\Index(name="KLIENTNR", columns={"KPERSID"}), @ORM\Index(name="KORISNIK", columns={"KORISNIK"}), @ORM\Index(name="TURNIRID", columns={"TURNIRID"})})
 * @ORM\Entity
 */
class TurnirSudionici
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

    /**
     * @var string|null
     *
     * @ORM\Column(name="grupa_mjesto", type="string", length=2, nullable=true)
     */
    private $grupaMjesto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pingic_id", type="integer", nullable=true)
     */
    private $pingicId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pingic_url", type="string", length=200, nullable=true)
     */
    private $pingicUrl;

    /**
     * @var bool
     *
     * @ORM\Column(name="nositelj", type="boolean", nullable=false)
     */
    private $nositelj = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;

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

    public function getGrupaMjesto(): ?string
    {
        return $this->grupaMjesto;
    }

    public function setGrupaMjesto(?string $grupaMjesto): self
    {
        $this->grupaMjesto = $grupaMjesto;

        return $this;
    }

    public function getPingicId(): ?int
    {
        return $this->pingicId;
    }

    public function setPingicId(?int $pingicId): self
    {
        $this->pingicId = $pingicId;

        return $this;
    }

    public function getPingicUrl(): ?string
    {
        return $this->pingicUrl;
    }

    public function setPingicUrl(?string $pingicUrl): self
    {
        $this->pingicUrl = $pingicUrl;

        return $this;
    }

    public function getNositelj(): ?bool
    {
        return $this->nositelj;
    }

    public function setNositelj(bool $nositelj): self
    {
        $this->nositelj = $nositelj;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }


}
