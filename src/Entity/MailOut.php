<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailOut
 *
 * @ORM\Table(name="mail_out", indexes={@ORM\Index(name="created", columns={"created", "maildate", "form_id", "kunde_nr", "ChangeKey", "out_id", "converted"}), @ORM\Index(name="from_email", columns={"from_email"}), @ORM\Index(name="rel_form_id", columns={"rel_form_id"}), @ORM\Index(name="to_email", columns={"to_email"}), @ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class MailOut
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
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=0, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to_email", type="string", length=1024, nullable=true)
     */
    private $toEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=512, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_id", type="string", length=255, nullable=true, options={"comment"="outlook id"})
     */
    private $messageId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="maildate", type="datetime", nullable=true)
     */
    private $maildate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_email", type="string", length=255, nullable=true, options={"comment"="Sender_EmailAddress_Address"})
     */
    private $fromEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to_name", type="string", length=255, nullable=true)
     */
    private $toName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_name", type="string", length=255, nullable=true, options={"comment"="From_EmailAddress_Name"})
     */
    private $fromName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment", type="text", length=0, nullable=true)
     */
    private $attachment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cc", type="string", length=512, nullable=true, options={"comment"="CcRecipients"})
     */
    private $cc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bcc", type="string", length=512, nullable=true, options={"comment"="BccRecipients"})
     */
    private $bcc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_name", type="string", length=20, nullable=true)
     */
    private $formName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="form_id", type="integer", nullable=true)
     */
    private $formId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kunde_nr", type="integer", nullable=true)
     */
    private $kundeNr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rel_form_id", type="integer", nullable=true)
     */
    private $relFormId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ChangeKey", type="string", length=200, nullable=true)
     */
    private $changekey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="out_id", type="integer", nullable=true)
     */
    private $outId;

    /**
     * @var bool
     *
     * @ORM\Column(name="converted", type="boolean", nullable=false)
     */
    private $converted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="dbstat", type="boolean", nullable=false, options={"default"="1"})
     */
    private $dbstat = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false, options={"comment"="0 for send,1 for draft"})
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WebLink", type="string", length=500, nullable=false, options={"default"="1"})
     */
    private $weblink = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ConversationId", type="string", length=200, nullable=false, options={"default"="1"})
     */
    private $conversationid = '1';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
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

    public function getToEmail(): ?string
    {
        return $this->toEmail;
    }

    public function setToEmail(?string $toEmail): self
    {
        $this->toEmail = $toEmail;

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

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    public function setMessageId(?string $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getMaildate(): ?\DateTimeInterface
    {
        return $this->maildate;
    }

    public function setMaildate(?\DateTimeInterface $maildate): self
    {
        $this->maildate = $maildate;

        return $this;
    }

    public function getFromEmail(): ?string
    {
        return $this->fromEmail;
    }

    public function setFromEmail(?string $fromEmail): self
    {
        $this->fromEmail = $fromEmail;

        return $this;
    }

    public function getToName(): ?string
    {
        return $this->toName;
    }

    public function setToName(?string $toName): self
    {
        $this->toName = $toName;

        return $this;
    }

    public function getFromName(): ?string
    {
        return $this->fromName;
    }

    public function setFromName(?string $fromName): self
    {
        $this->fromName = $fromName;

        return $this;
    }

    public function getAttachment(): ?string
    {
        return $this->attachment;
    }

    public function setAttachment(?string $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    public function getCc(): ?string
    {
        return $this->cc;
    }

    public function setCc(?string $cc): self
    {
        $this->cc = $cc;

        return $this;
    }

    public function getBcc(): ?string
    {
        return $this->bcc;
    }

    public function setBcc(?string $bcc): self
    {
        $this->bcc = $bcc;

        return $this;
    }

    public function getFormName(): ?string
    {
        return $this->formName;
    }

    public function setFormName(?string $formName): self
    {
        $this->formName = $formName;

        return $this;
    }

    public function getFormId(): ?int
    {
        return $this->formId;
    }

    public function setFormId(?int $formId): self
    {
        $this->formId = $formId;

        return $this;
    }

    public function getKundeNr(): ?int
    {
        return $this->kundeNr;
    }

    public function setKundeNr(?int $kundeNr): self
    {
        $this->kundeNr = $kundeNr;

        return $this;
    }

    public function getRelFormId(): ?int
    {
        return $this->relFormId;
    }

    public function setRelFormId(?int $relFormId): self
    {
        $this->relFormId = $relFormId;

        return $this;
    }

    public function getChangekey(): ?string
    {
        return $this->changekey;
    }

    public function setChangekey(?string $changekey): self
    {
        $this->changekey = $changekey;

        return $this;
    }

    public function getOutId(): ?int
    {
        return $this->outId;
    }

    public function setOutId(?int $outId): self
    {
        $this->outId = $outId;

        return $this;
    }

    public function getConverted(): ?bool
    {
        return $this->converted;
    }

    public function setConverted(bool $converted): self
    {
        $this->converted = $converted;

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

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getWeblink(): ?string
    {
        return $this->weblink;
    }

    public function setWeblink(string $weblink): self
    {
        $this->weblink = $weblink;

        return $this;
    }

    public function getConversationid(): ?string
    {
        return $this->conversationid;
    }

    public function setConversationid(string $conversationid): self
    {
        $this->conversationid = $conversationid;

        return $this;
    }


}
