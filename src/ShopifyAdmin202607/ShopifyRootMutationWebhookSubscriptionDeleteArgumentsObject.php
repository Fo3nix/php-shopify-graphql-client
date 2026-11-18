<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationWebhookSubscriptionDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the webhook subscription to delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
