<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationAbandonmentEmailStateUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "emailState"];

    protected $id;
    protected $emailState;
    protected $emailSentAt;
    protected $emailStateChangeReason;

    /**
     * The ID of the abandonment that needs to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The new email state of the abandonment.
     */
    public function setEmailState($shopifyAbandonmentEmailState): static
    {
        $this->emailState = new RawObject($shopifyAbandonmentEmailState);

        return $this;
    }

    /**
     * The date and time for when the email was sent, if that is the case.
     */
    public function setEmailSentAt($emailSentAt): static
    {
        $this->emailSentAt = $emailSentAt;

        return $this;
    }

    /**
     * The reason why the email was or was not sent.
     */
    public function setEmailStateChangeReason($emailStateChangeReason): static
    {
        $this->emailStateChangeReason = $emailStateChangeReason;

        return $this;
    }
}
