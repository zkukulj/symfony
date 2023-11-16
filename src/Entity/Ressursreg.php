<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressursreg
 *
 * @ORM\Table(name="ressursreg", indexes={@ORM\Index(name="AktivRessurs", columns={"AktivRessurs"}), @ORM\Index(name="AVDELING", columns={"AVDELING"}), @ORM\Index(name="Brukernavn", columns={"Brukernavn"}), @ORM\Index(name="ErBruker", columns={"usertype"}), @ORM\Index(name="KLIENTNR", columns={"KLIENTNR"}), @ORM\Index(name="Passord", columns={"Passord"})})
 * @ORM\Entity
 */
class Ressursreg
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="KLIENTNR", type="integer", nullable=true, options={"default"="3"})
     */
    private $klientnr = 3;

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
     * @ORM\Column(name="AVDELING", type="integer", nullable=true)
     */
    private $avdeling = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Passord", type="string", length=50, nullable=true)
     */
    private $passord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Brukernavn", type="string", length=50, nullable=true)
     */
    private $brukernavn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usertype", type="integer", nullable=true, options={"default"="2"})
     */
    private $usertype = 2;

    /**
     * @var string
     *
     * @ORM\Column(name="FORNAVN", type="string", length=50, nullable=false)
     */
    private $fornavn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ETTERNAVN", type="string", length=50, nullable=false)
     */
    private $etternavn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PADR", type="string", length=50, nullable=false)
     */
    private $padr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PADRPNR", type="string", length=50, nullable=false)
     */
    private $padrpnr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PADRPSTED", type="string", length=50, nullable=false)
     */
    private $padrpsted = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFON", type="string", length=50, nullable=false)
     */
    private $telefon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MOBIL", type="string", length=50, nullable=false)
     */
    private $mobil = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONNR", type="string", length=50, nullable=false)
     */
    private $personnr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANKGIRO", type="string", length=50, nullable=false)
     */
    private $bankgiro = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MEMO", type="text", length=0, nullable=true)
     */
    private $memo;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="outlook_email", type="string", length=50, nullable=false)
     */
    private $outlookEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="outlook_id", type="string", length=250, nullable=false)
     */
    private $outlookId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xobs_app_back", type="text", length=0, nullable=false, options={"comment"="app backrground"})
     */
    private $xobsAppBack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Initialer", type="string", length=50, nullable=true)
     */
    private $initialer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kunde_pris", type="decimal", precision=12, scale=0, nullable=true)
     */
    private $kundePris;

    /**
     * @var bool
     *
     * @ORM\Column(name="AktivRessurs", type="boolean", nullable=false, options={"default"="1"})
     */
    private $aktivressurs = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="micro_app", type="integer", nullable=true)
     */
    private $microApp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    public function getKlientnr(): ?int
    {
        return $this->klientnr;
    }

    public function setKlientnr(?int $klientnr): self
    {
        $this->klientnr = $klientnr;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvdeling(): ?int
    {
        return $this->avdeling;
    }

    public function setAvdeling(?int $avdeling): self
    {
        $this->avdeling = $avdeling;

        return $this;
    }

    public function getPassord(): ?string
    {
        return $this->passord;
    }

    public function setPassord(?string $passord): self
    {
        $this->passord = $passord;

        return $this;
    }

    public function getBrukernavn(): ?string
    {
        return $this->brukernavn;
    }

    public function setBrukernavn(?string $brukernavn): self
    {
        $this->brukernavn = $brukernavn;

        return $this;
    }

    public function getUsertype(): ?int
    {
        return $this->usertype;
    }

    public function setUsertype(?int $usertype): self
    {
        $this->usertype = $usertype;

        return $this;
    }

    public function getFornavn(): ?string
    {
        return $this->fornavn;
    }

    public function setFornavn(string $fornavn): self
    {
        $this->fornavn = $fornavn;

        return $this;
    }

    public function getEtternavn(): ?string
    {
        return $this->etternavn;
    }

    public function setEtternavn(string $etternavn): self
    {
        $this->etternavn = $etternavn;

        return $this;
    }

    public function getPadr(): ?string
    {
        return $this->padr;
    }

    public function setPadr(string $padr): self
    {
        $this->padr = $padr;

        return $this;
    }

    public function getPadrpnr(): ?string
    {
        return $this->padrpnr;
    }

    public function setPadrpnr(string $padrpnr): self
    {
        $this->padrpnr = $padrpnr;

        return $this;
    }

    public function getPadrpsted(): ?string
    {
        return $this->padrpsted;
    }

    public function setPadrpsted(string $padrpsted): self
    {
        $this->padrpsted = $padrpsted;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getMobil(): ?string
    {
        return $this->mobil;
    }

    public function setMobil(string $mobil): self
    {
        $this->mobil = $mobil;

        return $this;
    }

    public function getPersonnr(): ?string
    {
        return $this->personnr;
    }

    public function setPersonnr(string $personnr): self
    {
        $this->personnr = $personnr;

        return $this;
    }

    public function getBankgiro(): ?string
    {
        return $this->bankgiro;
    }

    public function setBankgiro(string $bankgiro): self
    {
        $this->bankgiro = $bankgiro;

        return $this;
    }

    public function getMemo(): ?string
    {
        return $this->memo;
    }

    public function setMemo(?string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getOutlookEmail(): ?string
    {
        return $this->outlookEmail;
    }

    public function setOutlookEmail(string $outlookEmail): self
    {
        $this->outlookEmail = $outlookEmail;

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

    public function getXobsAppBack(): ?string
    {
        return $this->xobsAppBack;
    }

    public function setXobsAppBack(string $xobsAppBack): self
    {
        $this->xobsAppBack = $xobsAppBack;

        return $this;
    }

    public function getInitialer(): ?string
    {
        return $this->initialer;
    }

    public function setInitialer(?string $initialer): self
    {
        $this->initialer = $initialer;

        return $this;
    }

    public function getKundePris(): ?string
    {
        return $this->kundePris;
    }

    public function setKundePris(?string $kundePris): self
    {
        $this->kundePris = $kundePris;

        return $this;
    }

    public function getAktivressurs(): ?bool
    {
        return $this->aktivressurs;
    }

    public function setAktivressurs(bool $aktivressurs): self
    {
        $this->aktivressurs = $aktivressurs;

        return $this;
    }

    public function getMicroApp(): ?int
    {
        return $this->microApp;
    }

    public function setMicroApp(?int $microApp): self
    {
        $this->microApp = $microApp;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
