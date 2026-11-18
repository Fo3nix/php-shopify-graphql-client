<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The inclusive pricing strategy for a market.
 */
class ShopifyMarketPriceInclusionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketPriceInclusions";

    /**
     * The inclusive duties pricing strategy of the market. This determines if prices include duties.
     */
    public function selectInclusiveDutiesPricingStrategy(): static
    {
        $this->selectField("inclusiveDutiesPricingStrategy");

        return $this;
    }

    /**
     * The inclusive tax pricing strategy of the market. This determines if prices include taxes.
     */
    public function selectInclusiveTaxPricingStrategy(): static
    {
        $this->selectField("inclusiveTaxPricingStrategy");

        return $this;
    }
}
