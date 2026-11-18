<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An edit session for an order.
 */
class ShopifyOrderEditSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditSession";

    /**
     * The unique ID of the order edit session.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
