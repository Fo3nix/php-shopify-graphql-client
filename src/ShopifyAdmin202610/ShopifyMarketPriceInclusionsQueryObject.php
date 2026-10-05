<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketPriceInclusionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketPriceInclusions";

    public function selectAdaptivePricingEnabled()
    {
        $this->selectField("adaptivePricingEnabled");

        return $this;
    }

    public function selectInclusiveDutiesPricingStrategy()
    {
        $this->selectField("inclusiveDutiesPricingStrategy");

        return $this;
    }

    public function selectInclusiveTaxPricingStrategy()
    {
        $this->selectField("inclusiveTaxPricingStrategy");

        return $this;
    }
}
