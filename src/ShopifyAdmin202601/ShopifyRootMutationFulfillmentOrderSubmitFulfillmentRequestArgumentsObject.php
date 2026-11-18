<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderSubmitFulfillmentRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $message;
    protected $notifyCustomer;
    protected $fulfillmentOrderLineItems;

    /**
     * The ID of the fulfillment order associated with fulfillment request.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * An optional message for the fulfillment request.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Whether the customer should be notified when fulfillments are created for this fulfillment order.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * The fulfillment order line items to be requested for fulfillment.
     * If left blank, all line items of the fulfillment order are requested for fulfillment.
     */
    public function setFulfillmentOrderLineItems(array $fulfillmentOrderLineItems): static
    {
        $this->fulfillmentOrderLineItems = $fulfillmentOrderLineItems;

        return $this;
    }
}
