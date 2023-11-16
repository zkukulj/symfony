<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appset
 *
 * @ORM\Table(name="appset", indexes={@ORM\Index(name="apptype", columns={"apptype"})})
 * @ORM\Entity
 */
class Appset
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
     * @ORM\Column(name="apptype", type="integer", nullable=true)
     */
    private $apptype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fb_link", type="string", length=200, nullable=true)
     */
    private $fbLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fb_link_nm", type="string", length=60, nullable=true)
     */
    private $fbLinkNm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lokacija", type="text", length=16777215, nullable=true)
     */
    private $lokacija;

    /**
     * @var bool
     *
     * @ORM\Column(name="pingic_on", type="boolean", nullable=false, options={"default"="1"})
     */
    private $pingicOn = true;

    /**
     * @var string
     *
     * @ORM\Column(name="news_set", type="text", length=16777215, nullable=false)
     */
    private $newsSet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_home", type="string", length=80, nullable=true)
     */
    private $appHome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eml_logo", type="string", length=250, nullable=true)
     */
    private $emlLogo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="for_game", type="integer", nullable=true)
     */
    private $forGame;

    /**
     * @var int
     *
     * @ORM\Column(name="prikazi_obavijesti", type="integer", nullable=false, options={"default"="2"})
     */
    private $prikaziObavijesti = 2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApptype(): ?int
    {
        return $this->apptype;
    }

    public function setApptype(?int $apptype): self
    {
        $this->apptype = $apptype;

        return $this;
    }

    public function getFbLink(): ?string
    {
        return $this->fbLink;
    }

    public function setFbLink(?string $fbLink): self
    {
        $this->fbLink = $fbLink;

        return $this;
    }

    public function getFbLinkNm(): ?string
    {
        return $this->fbLinkNm;
    }

    public function setFbLinkNm(?string $fbLinkNm): self
    {
        $this->fbLinkNm = $fbLinkNm;

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

    public function getPingicOn(): ?bool
    {
        return $this->pingicOn;
    }

    public function setPingicOn(bool $pingicOn): self
    {
        $this->pingicOn = $pingicOn;

        return $this;
    }

    public function getNewsSet(): ?string
    {
        return $this->newsSet;
    }

    public function setNewsSet(string $newsSet): self
    {
        $this->newsSet = $newsSet;

        return $this;
    }

    public function getAppHome(): ?string
    {
        return $this->appHome;
    }

    public function setAppHome(?string $appHome): self
    {
        $this->appHome = $appHome;

        return $this;
    }

    public function getEmlLogo(): ?string
    {
        return $this->emlLogo;
    }

    public function setEmlLogo(?string $emlLogo): self
    {
        $this->emlLogo = $emlLogo;

        return $this;
    }

    public function getForGame(): ?int
    {
        return $this->forGame;
    }

    public function setForGame(?int $forGame): self
    {
        $this->forGame = $forGame;

        return $this;
    }

    public function getPrikaziObavijesti(): ?int
    {
        return $this->prikaziObavijesti;
    }

    public function setPrikaziObavijesti(int $prikaziObavijesti): self
    {
        $this->prikaziObavijesti = $prikaziObavijesti;

        return $this;
    }


}
