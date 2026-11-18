<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A numeric count with precision information indicating whether the count is exact or an estimate.
 */
class ShopifyCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "Count";

    /**
     * The count of elements.
     */
    public function selectCount(): static
    {
        $this->selectField("count");

        return $this;
    }

    /**
     * The count's precision, or the exactness of the value.
     */
    public function selectPrecision(): static
    {
        $this->selectField("precision");

        return $this;
    }
}
