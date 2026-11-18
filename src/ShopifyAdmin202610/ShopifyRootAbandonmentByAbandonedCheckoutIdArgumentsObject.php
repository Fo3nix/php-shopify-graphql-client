<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAbandonmentByAbandonedCheckoutIdArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["abandonedCheckoutId"];

    protected $abandonedCheckoutId;

    /**
     * The ID of the Abandoned Checkout ID to query by.
     */
    public function setAbandonedCheckoutId($abandonedCheckoutId): static
    {
        $this->abandonedCheckoutId = $abandonedCheckoutId;

        return $this;
    }
}
