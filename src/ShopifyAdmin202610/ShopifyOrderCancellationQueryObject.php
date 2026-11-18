<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Details about the order cancellation.
 */
class ShopifyOrderCancellationQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCancellation";

    /**
     * Staff provided note for the order cancellation.
     */
    public function selectStaffNote(): static
    {
        $this->selectField("staffNote");

        return $this;
    }
}
