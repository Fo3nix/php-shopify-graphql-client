<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderCloseArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $message;

    /**
     * The ID of the fulfillment order to mark as incomplete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * An optional reason for marking the fulfillment order as incomplete.
     */
    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }
}
