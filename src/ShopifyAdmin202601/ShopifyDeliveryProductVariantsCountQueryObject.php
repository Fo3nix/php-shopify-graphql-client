<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * How many product variants are in a profile. This count is capped at 500.
 */
class ShopifyDeliveryProductVariantsCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProductVariantsCount";

    /**
     * Whether the count has reached the cap of 500.
     */
    public function selectCapped(): static
    {
        $this->selectField("capped");

        return $this;
    }

    /**
     * The product variant count.
     */
    public function selectCount(): static
    {
        $this->selectField("count");

        return $this;
    }
}
