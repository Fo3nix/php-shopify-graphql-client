<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationFulfillmentOrderRejectFulfillmentRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $reason;
    protected $message;
    protected $lineItems;

    /**
     * The ID of the fulfillment order associated with the fulfillment request.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The reason for the fulfillment order rejection.
     */
    public function setReason($shopifyFulfillmentOrderRejectionReason): static
    {
        $this->reason = new RawObject($shopifyFulfillmentOrderRejectionReason);

        return $this;
    }

    /**
     * An optional reason for rejecting the fulfillment request.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }

    /**
     * An optional array of line item rejection details. If none are provided, all line items will be assumed to be unfulfillable.
     *
     * **Note**: After the fulfillment request has been rejected, none of the line items will be able to be fulfilled. This field documents which line items specifically were unable to be fulfilled and why.
     */
    public function setLineItems(array $lineItems): static
    {
        $this->lineItems = $lineItems;

        return $this;
    }
}
