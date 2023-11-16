<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccessTokens
 *
 * @ORM\Table(name="personal_access_tokens")
 * @ORM\Entity
 */
class PersonalAccessTokens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenable_type", type="string", length=255, nullable=false)
     */
    private $tokenableType;

    /**
     * @var int
     *
     * @ORM\Column(name="tokenable_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $tokenableId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=64, nullable=false)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abilities", type="text", length=65535, nullable=true)
     */
    private $abilities;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_used_at", type="datetime", nullable=true)
     */
    private $lastUsedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTokenableType(): ?string
    {
        return $this->tokenableType;
    }

    public function setTokenableType(string $tokenableType): self
    {
        $this->tokenableType = $tokenableType;

        return $this;
    }

    public function getTokenableId(): ?string
    {
        return $this->tokenableId;
    }

    public function setTokenableId(string $tokenableId): self
    {
        $this->tokenableId = $tokenableId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getAbilities(): ?string
    {
        return $this->abilities;
    }

    public function setAbilities(?string $abilities): self
    {
        $this->abilities = $abilities;

        return $this;
    }

    public function getLastUsedAt(): ?\DateTimeInterface
    {
        return $this->lastUsedAt;
    }

    public function setLastUsedAt(?\DateTimeInterface $lastUsedAt): self
    {
        $this->lastUsedAt = $lastUsedAt;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeInterface
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(?\DateTimeInterface $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
