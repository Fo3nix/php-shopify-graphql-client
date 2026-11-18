<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A country that a subdivision belongs to.
 */
class ShopifyMarketRegionSubdivisionCountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionSubdivisionCountry";

    /**
     * The ISO code identifying the country.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The name of the country.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
