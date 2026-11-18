<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Indicates that a discount applies to all buyers without restrictions, enabling universal promotions that reach every customer. This selection removes buyer-specific limitations from discount eligibility.
 *
 * For example, a flash sale or grand opening promotion would target all buyers to maximize participation and store visibility.
 *
 * Learn more about [discount targeting](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountApplication).
 */
class ShopifyDiscountBuyerSelectionAllQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountBuyerSelectionAll";

    /**
     * All buyers are eligible for the discount.
     */
    public function selectAll(): static
    {
        $this->selectField("all");

        return $this;
    }
}
