<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The order associated to the balance transaction.
 */
class ShopifyShopifyPaymentsAssociatedOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAssociatedOrder";

    /**
     * The ID of the associated order.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the associated order.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
