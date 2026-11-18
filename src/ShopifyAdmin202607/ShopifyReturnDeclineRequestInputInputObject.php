<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for declining a customer's return request.
 */
class ShopifyReturnDeclineRequestInputInputObject extends InputObject
{
    const REQUIRED = ["id", "declineReason"];

    protected $id;
    protected $declineReason;
    protected $notifyCustomer;
    protected $declineNote;

    /**
     * The ID of the return that's being declined.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The reason why the merchant declined the customer's return request.
     */
    public function setDeclineReason($shopifyReturnDeclineReason): static
    {
        $this->declineReason = new RawObject($shopifyReturnDeclineReason);

        return $this;
    }

    /**
     * Notify the customer when a return request is declined.
     * The customer will only receive a notification if `Order.email` is present.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * The notification message that's sent to a customer about their declined return request.
     * Maximum length: 500 characters.
     */
    public function setDeclineNote($declineNote): static
    {
        $this->declineNote = $declineNote;

        return $this;
    }
}
