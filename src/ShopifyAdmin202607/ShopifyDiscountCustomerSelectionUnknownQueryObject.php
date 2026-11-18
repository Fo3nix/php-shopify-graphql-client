<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An unrecognized customer selection type. Use the `context` field on the parent discount type instead.
 */
class ShopifyDiscountCustomerSelectionUnknownQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerSelectionUnknown";

    /**
     * The underlying customer selection type.
     */
    public function selectCustomerSelectionType(): static
    {
        $this->selectField("customerSelectionType");

        return $this;
    }
}
