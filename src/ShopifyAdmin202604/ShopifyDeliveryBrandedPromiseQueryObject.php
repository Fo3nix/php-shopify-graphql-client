<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a branded promise presented to buyers.
 */
class ShopifyDeliveryBrandedPromiseQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryBrandedPromise";

    /**
     * The handle of the branded promise.  For example: `shop_promise`.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The name of the branded promise.  For example: `Shop Promise`.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
