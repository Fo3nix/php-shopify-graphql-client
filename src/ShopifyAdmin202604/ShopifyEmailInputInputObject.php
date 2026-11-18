<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an email.
 */
class ShopifyEmailInputInputObject extends InputObject
{
    protected $subject;
    protected $to;
    protected $from;
    protected $body;
    protected $bcc;
    protected $customMessage;

    /**
     * Specifies the email subject.
     */
    public function setSubject($subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Specifies the email recipient.
     */
    public function setTo($to): static
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Specifies the email sender.
     */
    public function setFrom($from): static
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Specifies the email body.
     */
    public function setBody($body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Specifies any bcc recipients for the email.
     */
    public function setBcc(array $bcc): static
    {
        $this->bcc = $bcc;

        return $this;
    }

    /**
     * Specifies a custom message to include in the email.
     */
    public function setCustomMessage($customMessage): static
    {
        $this->customMessage = $customMessage;

        return $this;
    }
}
