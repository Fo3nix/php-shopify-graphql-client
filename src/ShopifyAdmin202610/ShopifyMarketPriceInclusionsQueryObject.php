<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The inclusive pricing strategy for a market.
 */
class ShopifyMarketPriceInclusionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketPriceInclusions";

    /**
     * Whether adaptive pricing is enabled for the market. Only applicable to Managed Markets and must be ignored otherwise.
     */
    public function selectAdaptivePricingEnabled(): static
    {
        $this->selectField("adaptivePricingEnabled");

        return $this;
    }

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
