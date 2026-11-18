<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MarketCatalog and a cursor during pagination.
 */
class ShopifyMarketCatalogEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalogEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MarketCatalogEdge.
     */
    public function selectNode(?ShopifyMarketCatalogEdgeNodeArgumentsObject $argsObject = null): ShopifyMarketCatalogQueryObject
    {
        $object = new ShopifyMarketCatalogQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
