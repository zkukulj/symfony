<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TurniriAudit
 *
 * @ORM\Table(name="turniri_audit")
 * @ORM\Entity
 */
class TurniriAudit
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
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="table", type="string", length=300, nullable=true)
     */
    private $table;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=250, nullable=false)
     */
    private $action;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTable(): ?string
    {
        return $this->table;
    }

    public function setTable(?string $table): self
    {
        $this->table = $table;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
