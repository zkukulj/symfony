<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calcalendar
 *
 * @ORM\Table(name="calcalendar", indexes={@ORM\Index(name="kunde_id", columns={"kunde_id"}), @ORM\Index(name="outlook_id", columns={"outlook_id"}), @ORM\Index(name="user_email", columns={"user_email"})})
 * @ORM\Entity
 */
class Calcalendar
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
     * @ORM\Column(name="Body", type="text", length=16777215, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Subject", type="string", length=300, nullable=true)
     */
    private $subject;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="EndTime", type="datetime", nullable=true)
     */
    private $endtime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WebLink", type="string", length=350, nullable=true)
     */
    private $weblink;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_email", type="string", length=50, nullable=true)
     */
    private $userEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outlook_id", type="string", length=200, nullable=true)
     */
    private $outlookId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_event", type="boolean", nullable=false)
     */
    private $isEvent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="iCalUId", type="string", length=350, nullable=true)
     */
    private $icaluid;

    /**
     * @var bool
     *
     * @ORM\Column(name="dbstat", type="boolean", nullable=false, options={"default"="1"})
     */
    private $dbstat = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kunde_id", type="integer", nullable=true)
     */
    private $kundeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_t", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $addT = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upd_t", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updT = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LastModifiedDateTime", type="string", length=50, nullable=true)
     */
    private $lastmodifieddatetime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(?\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEndtime(): ?\DateTimeInterface
    {
        return $this->endtime;
    }

    public function setEndtime(?\DateTimeInterface $endtime): self
    {
        $this->endtime = $endtime;

        return $this;
    }

    public function getWeblink(): ?string
    {
        return $this->weblink;
    }

    public function setWeblink(?string $weblink): self
    {
        $this->weblink = $weblink;

        return $this;
    }

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getOutlookId(): ?string
    {
        return $this->outlookId;
    }

    public function setOutlookId(?string $outlookId): self
    {
        $this->outlookId = $outlookId;

        return $this;
    }

    public function getIsEvent(): ?bool
    {
        return $this->isEvent;
    }

    public function setIsEvent(bool $isEvent): self
    {
        $this->isEvent = $isEvent;

        return $this;
    }

    public function getIcaluid(): ?string
    {
        return $this->icaluid;
    }

    public function setIcaluid(?string $icaluid): self
    {
        $this->icaluid = $icaluid;

        return $this;
    }

    public function getDbstat(): ?bool
    {
        return $this->dbstat;
    }

    public function setDbstat(bool $dbstat): self
    {
        $this->dbstat = $dbstat;

        return $this;
    }

    public function getKundeId(): ?int
    {
        return $this->kundeId;
    }

    public function setKundeId(?int $kundeId): self
    {
        $this->kundeId = $kundeId;

        return $this;
    }

    public function getAddT(): ?\DateTimeInterface
    {
        return $this->addT;
    }

    public function setAddT(\DateTimeInterface $addT): self
    {
        $this->addT = $addT;

        return $this;
    }

    public function getUpdT(): ?\DateTimeInterface
    {
        return $this->updT;
    }

    public function setUpdT(\DateTimeInterface $updT): self
    {
        $this->updT = $updT;

        return $this;
    }

    public function getLastmodifieddatetime(): ?string
    {
        return $this->lastmodifieddatetime;
    }

    public function setLastmodifieddatetime(?string $lastmodifieddatetime): self
    {
        $this->lastmodifieddatetime = $lastmodifieddatetime;

        return $this;
    }


}
