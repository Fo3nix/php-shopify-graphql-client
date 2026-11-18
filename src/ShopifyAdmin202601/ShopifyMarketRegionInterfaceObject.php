<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A geographic region which comprises a market.
 */
class ShopifyMarketRegionInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "MarketRegion";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the region.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    public function onMarketRegionCountry(): ShopifyMarketRegionCountryQueryObject
    {
        $object = new ShopifyMarketRegionCountryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
