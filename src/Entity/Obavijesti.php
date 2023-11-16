<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obavijesti
 *
 * @ORM\Table(name="obavijesti", indexes={@ORM\Index(name="KLIENTNR", columns={"KLIENTNR"}), @ORM\Index(name="KORISNICI", columns={"KORISNICI"})})
 * @ORM\Entity
 */
class Obavijesti
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
     * @ORM\Column(name="LOKACIJA", type="string", length=50, nullable=true)
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
     * @ORM\Column(name="DAT_DO", type="date", nullable=true)
     */
    private $datDo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ChTime", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $chtime = 'CURRENT_TIMESTAMP';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sent_newsletter", type="boolean", nullable=true)
     */
    private $sentNewsletter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrdreTotalInkl", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $ordretotalinkl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ODOBRENO", type="boolean", nullable=true)
     */
    private $odobreno = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ODG_OSOBA", type="integer", nullable=true)
     */
    private $odgOsoba;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OPIS", type="text", length=0, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_NL", type="text", length=16777215, nullable=false)
     */
    private $opisNl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TURNIRID", type="integer", nullable=true)
     */
    private $turnirid;

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

    public function getSentNewsletter(): ?bool
    {
        return $this->sentNewsletter;
    }

    public function setSentNewsletter(?bool $sentNewsletter): self
    {
        $this->sentNewsletter = $sentNewsletter;

        return $this;
    }

    public function getOrdretotalinkl(): ?string
    {
        return $this->ordretotalinkl;
    }

    public function setOrdretotalinkl(?string $ordretotalinkl): self
    {
        $this->ordretotalinkl = $ordretotalinkl;

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

    public function getOdgOsoba(): ?int
    {
        return $this->odgOsoba;
    }

    public function setOdgOsoba(?int $odgOsoba): self
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

    public function getOpisNl(): ?string
    {
        return $this->opisNl;
    }

    public function setOpisNl(string $opisNl): self
    {
        $this->opisNl = $opisNl;

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


}
