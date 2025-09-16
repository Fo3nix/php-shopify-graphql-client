<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketPriceInclusionsQueryObject extends QueryObject
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
