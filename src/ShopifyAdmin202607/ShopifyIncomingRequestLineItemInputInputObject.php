<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the incoming line item.
 */
class ShopifyIncomingRequestLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentOrderLineItemId"];

    protected $fulfillmentOrderLineItemId;
    protected $message;

    /**
     * The ID of the rejected line item.
     */
    public function setFulfillmentOrderLineItemId($fulfillmentOrderLineItemId): static
    {
        $this->fulfillmentOrderLineItemId = $fulfillmentOrderLineItemId;

        return $this;
    }

    /**
     * The rejection message of the line item.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }
}
