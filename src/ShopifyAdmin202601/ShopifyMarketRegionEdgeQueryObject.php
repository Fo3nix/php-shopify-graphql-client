<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MarketRegion and a cursor during pagination.
 */
class ShopifyMarketRegionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MarketRegionEdge.
     */
    public function selectNode(?ShopifyMarketRegionEdgeNodeArgumentsObject $argsObject = null): ShopifyMarketRegionInterfaceObject
    {
        $object = new ShopifyMarketRegionInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
