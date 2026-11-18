<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The discount's eligibility is affected by something that can't be represented in this API version.
 */
class ShopifyDiscountContextUnknownQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountContextUnknown";

    /**
     * The underlying discount context type.
     */
    public function selectContextType(): static
    {
        $this->selectField("contextType");

        return $this;
    }
}
