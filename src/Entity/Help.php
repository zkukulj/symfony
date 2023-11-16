<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Help
 *
 * @ORM\Table(name="help")
 * @ORM\Entity
 */
class Help
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
     * @ORM\Column(name="page_help", type="string", length=50, nullable=true)
     */
    private $pageHelp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descr_en", type="text", length=0, nullable=true)
     */
    private $descrEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descr_hr", type="text", length=0, nullable=true)
     */
    private $descrHr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descr_de", type="text", length=0, nullable=true)
     */
    private $descrDe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="video", type="text", length=0, nullable=true)
     */
    private $video;

    /**
     * @var string|null
     *
     * @ORM\Column(name="img", type="text", length=0, nullable=true)
     */
    private $img;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageHelp(): ?string
    {
        return $this->pageHelp;
    }

    public function setPageHelp(?string $pageHelp): self
    {
        $this->pageHelp = $pageHelp;

        return $this;
    }

    public function getDescrEn(): ?string
    {
        return $this->descrEn;
    }

    public function setDescrEn(?string $descrEn): self
    {
        $this->descrEn = $descrEn;

        return $this;
    }

    public function getDescrHr(): ?string
    {
        return $this->descrHr;
    }

    public function setDescrHr(?string $descrHr): self
    {
        $this->descrHr = $descrHr;

        return $this;
    }

    public function getDescrDe(): ?string
    {
        return $this->descrDe;
    }

    public function setDescrDe(?string $descrDe): self
    {
        $this->descrDe = $descrDe;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

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


}
