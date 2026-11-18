<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootSubscriptionBillingAttemptArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the `SubscriptionBillingAttempt` to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
