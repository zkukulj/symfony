<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oglasi
 *
 * @ORM\Table(name="oglasi")
 * @ORM\Entity
 */
class Oglasi
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="DAT__OD", type="datetime", nullable=true)
     */
    private $datOd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ODOBRENO", type="boolean", nullable=true)
     */
    private $odobreno = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="OPIS", type="text", length=0, nullable=true)
     */
    private $opis;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="koristi_sliku", type="boolean", nullable=true)
     */
    private $koristiSliku = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SLIKA", type="text", length=16777215, nullable=true)
     */
    private $slika;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDatOd(): ?\DateTimeInterface
    {
        return $this->datOd;
    }

    public function setDatOd(?\DateTimeInterface $datOd): self
    {
        $this->datOd = $datOd;

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

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(?string $opis): self
    {
        $this->opis = $opis;

        return $this;
    }

    public function getKoristiSliku(): ?bool
    {
        return $this->koristiSliku;
    }

    public function setKoristiSliku(?bool $koristiSliku): self
    {
        $this->koristiSliku = $koristiSliku;

        return $this;
    }

    public function getSlika(): ?string
    {
        return $this->slika;
    }

    public function setSlika(?string $slika): self
    {
        $this->slika = $slika;

        return $this;
    }


}
