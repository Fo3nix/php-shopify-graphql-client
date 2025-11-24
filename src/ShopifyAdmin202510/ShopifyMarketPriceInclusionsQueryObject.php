<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketPriceInclusionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketPriceInclusions";

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
