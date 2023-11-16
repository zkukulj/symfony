<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupsSet
 *
 * @ORM\Table(name="groups_set", indexes={@ORM\Index(name="grp", columns={"grp"}), @ORM\Index(name="pl_nr", columns={"pl_nr"})})
 * @ORM\Entity
 */
class GroupsSet
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
     * @ORM\Column(name="grp_cont", type="text", length=16777215, nullable=true)
     */
    private $grpCont;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pl_nr", type="smallint", nullable=true, options={"default"="4"})
     */
    private $plNr = '4';

    /**
     * @var string|null
     *
     * @ORM\Column(name="grp", type="string", length=2, nullable=true)
     */
    private $grp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrpCont(): ?string
    {
        return $this->grpCont;
    }

    public function setGrpCont(?string $grpCont): self
    {
        $this->grpCont = $grpCont;

        return $this;
    }

    public function getPlNr(): ?int
    {
        return $this->plNr;
    }

    public function setPlNr(?int $plNr): self
    {
        $this->plNr = $plNr;

        return $this;
    }

    public function getGrp(): ?string
    {
        return $this->grp;
    }

    public function setGrp(?string $grp): self
    {
        $this->grp = $grp;

        return $this;
    }


}
