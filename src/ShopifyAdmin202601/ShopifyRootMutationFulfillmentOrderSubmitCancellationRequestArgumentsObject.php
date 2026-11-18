<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderSubmitCancellationRequestArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $message;

    /**
     * The ID of the fulfillment order associated with the cancellation request.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * An optional reason for the cancellation request.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }
}
