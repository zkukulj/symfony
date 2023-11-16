<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kpers
 *
 * @ORM\Table(name="kpers", indexes={@ORM\Index(name="klientnr", columns={"klientnr"}), @ORM\Index(name="Kundeid", columns={"kundeid"}), @ORM\Index(name="outlook_id", columns={"outlook_id"})})
 * @ORM\Entity
 */
class Kpers
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
     * @var int|null
     *
     * @ORM\Column(name="klientnr", type="integer", nullable=true, options={"default"="3"})
     */
    private $klientnr = 3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kundeid", type="integer", nullable=true, options={"comment"="kundenr"})
     */
    private $kundeid;

    /**
     * @var string
     *
     * @ORM\Column(name="outlook_id", type="string", length=200, nullable=false)
     */
    private $outlookId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="full_name", type="string", length=100, nullable=true)
     */
    private $fullName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Etternavn", type="string", length=40, nullable=true)
     */
    private $etternavn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fornavn", type="string", length=40, nullable=true)
     */
    private $fornavn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="padr", type="string", length=30, nullable=true)
     */
    private $padr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="padrpnr", type="string", length=8, nullable=true)
     */
    private $padrpnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="padrpsted", type="string", length=20, nullable=true)
     */
    private $padrpsted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="land", type="string", length=20, nullable=true)
     */
    private $land;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobil", type="string", length=15, nullable=true)
     */
    private $mobil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PersonalNotes", type="string", length=500, nullable=true)
     */
    private $personalnotes;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=true)
     */
    private $newsletter = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="img", type="text", length=0, nullable=true)
     */
    private $img;

    /**
     * @var string|null
     *
     * @ORM\Column(name="klub", type="string", length=150, nullable=true)
     */
    private $klub;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="bday", type="date", nullable=true)
     */
    private $bday;

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

    public function getKundeid(): ?int
    {
        return $this->kundeid;
    }

    public function setKundeid(?int $kundeid): self
    {
        $this->kundeid = $kundeid;

        return $this;
    }

    public function getOutlookId(): ?string
    {
        return $this->outlookId;
    }

    public function setOutlookId(string $outlookId): self
    {
        $this->outlookId = $outlookId;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getEtternavn(): ?string
    {
        return $this->etternavn;
    }

    public function setEtternavn(?string $etternavn): self
    {
        $this->etternavn = $etternavn;

        return $this;
    }

    public function getFornavn(): ?string
    {
        return $this->fornavn;
    }

    public function setFornavn(?string $fornavn): self
    {
        $this->fornavn = $fornavn;

        return $this;
    }

    public function getPadr(): ?string
    {
        return $this->padr;
    }

    public function setPadr(?string $padr): self
    {
        $this->padr = $padr;

        return $this;
    }

    public function getPadrpnr(): ?string
    {
        return $this->padrpnr;
    }

    public function setPadrpnr(?string $padrpnr): self
    {
        $this->padrpnr = $padrpnr;

        return $this;
    }

    public function getPadrpsted(): ?string
    {
        return $this->padrpsted;
    }

    public function setPadrpsted(?string $padrpsted): self
    {
        $this->padrpsted = $padrpsted;

        return $this;
    }

    public function getLand(): ?string
    {
        return $this->land;
    }

    public function setLand(?string $land): self
    {
        $this->land = $land;

        return $this;
    }

    public function getMobil(): ?string
    {
        return $this->mobil;
    }

    public function setMobil(?string $mobil): self
    {
        $this->mobil = $mobil;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPersonalnotes(): ?string
    {
        return $this->personalnotes;
    }

    public function setPersonalnotes(?string $personalnotes): self
    {
        $this->personalnotes = $personalnotes;

        return $this;
    }

    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(?bool $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getKlub(): ?string
    {
        return $this->klub;
    }

    public function setKlub(?string $klub): self
    {
        $this->klub = $klub;

        return $this;
    }

    public function getBday(): ?\DateTimeInterface
    {
        return $this->bday;
    }

    public function setBday(?\DateTimeInterface $bday): self
    {
        $this->bday = $bday;

        return $this;
    }


}
