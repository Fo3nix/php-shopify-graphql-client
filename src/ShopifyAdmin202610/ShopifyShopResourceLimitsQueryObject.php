<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Resource limits of a shop.
 */
class ShopifyShopResourceLimitsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopResourceLimits";

    /**
     * Maximum number of locations allowed.
     */
    public function selectLocationLimit(): static
    {
        $this->selectField("locationLimit");

        return $this;
    }

    /**
     * Maximum number of product options allowed.
     */
    public function selectMaxProductOptions(): static
    {
        $this->selectField("maxProductOptions");

        return $this;
    }

    /**
     * The maximum number of variants allowed per product.
     */
    public function selectMaxProductVariants(): static
    {
        $this->selectField("maxProductVariants");

        return $this;
    }

    /**
     * Whether the shop has reached the limit of the number of URL redirects it can make for resources.
     */
    public function selectRedirectLimitReached(): static
    {
        $this->selectField("redirectLimitReached");

        return $this;
    }
}
