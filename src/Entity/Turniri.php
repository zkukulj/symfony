<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turniri
 *
 * @ORM\Table(name="turniri", indexes={@ORM\Index(name="KLIENTNR", columns={"KLIENTNR"}), @ORM\Index(name="KORISNICI", columns={"KORISNICI"}), @ORM\Index(name="turnir_typ", columns={"turnir_typ", "ODG_OSOBA", "on_tv"})})
 * @ORM\Entity
 */
class Turniri
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KLIENTNR", type="integer", nullable=true)
     */
    private $klientnr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KORISNICI", type="integer", nullable=true)
     */
    private $korisnici;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NAZIV", type="string", length=80, nullable=true)
     */
    private $naziv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="STATUS", type="integer", nullable=true, options={"comment"="status for orders"})
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOKACIJA", type="text", length=0, nullable=true)
     */
    private $lokacija;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DAT__OD", type="datetime", nullable=true)
     */
    private $datOd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DAT_DO", type="datetime", nullable=true)
     */
    private $datDo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ChTime", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $chtime = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="turnir_typ", type="integer", nullable=true)
     */
    private $turnirTyp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tour_content", type="text", length=16777215, nullable=true)
     */
    private $tourContent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ODOBRENO", type="boolean", nullable=true)
     */
    private $odobreno = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ODG_OSOBA", type="boolean", nullable=false, options={"comment"="blok2 checkbox for multi"})
     */
    private $odgOsoba = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OPIS", type="text", length=0, nullable=true)
     */
    private $opis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="on_tv", type="string", length=100, nullable=true)
     */
    private $onTv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlientnr(): ?int
    {
        return $this->klientnr;
    }

    public function setKlientnr(?int $klientnr): self
    {
        $this->klientnr = $klientnr;

        return $this;
    }

    public function getKorisnici(): ?int
    {
        return $this->korisnici;
    }

    public function setKorisnici(?int $korisnici): self
    {
        $this->korisnici = $korisnici;

        return $this;
    }

    public function getNaziv(): ?string
    {
        return $this->naziv;
    }

    public function setNaziv(?string $naziv): self
    {
        $this->naziv = $naziv;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLokacija(): ?string
    {
        return $this->lokacija;
    }

    public function setLokacija(?string $lokacija): self
    {
        $this->lokacija = $lokacija;

        return $this;
    }

    public function getDatOd(): ?\DateTimeInterface
    {
        return $this->datOd;
    }

    public function setDatOd(?\DateTimeInterface $datOd): self
    {
        $this->datOd = $datOd;

        return $this;
    }

    public function getDatDo(): ?\DateTimeInterface
    {
        return $this->datDo;
    }

    public function setDatDo(?\DateTimeInterface $datDo): self
    {
        $this->datDo = $datDo;

        return $this;
    }

    public function getChtime(): ?\DateTimeInterface
    {
        return $this->chtime;
    }

    public function setChtime(?\DateTimeInterface $chtime): self
    {
        $this->chtime = $chtime;

        return $this;
    }

    public function getTurnirTyp(): ?int
    {
        return $this->turnirTyp;
    }

    public function setTurnirTyp(?int $turnirTyp): self
    {
        $this->turnirTyp = $turnirTyp;

        return $this;
    }

    public function getTourContent(): ?string
    {
        return $this->tourContent;
    }

    public function setTourContent(?string $tourContent): self
    {
        $this->tourContent = $tourContent;

        return $this;
    }

    public function getOdobreno(): ?bool
    {
        return $this->odobreno;
    }

    public function setOdobreno(?bool $odobreno): self
    {
        $this->odobreno = $odobreno;

        return $this;
    }

    public function getOdgOsoba(): ?bool
    {
        return $this->odgOsoba;
    }

    public function setOdgOsoba(bool $odgOsoba): self
    {
        $this->odgOsoba = $odgOsoba;

        return $this;
    }

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(?string $opis): self
    {
        $this->opis = $opis;

        return $this;
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


}
