<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one PriceListPrice and a cursor during pagination.
 */
class ShopifyPriceListPriceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPriceEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of PriceListPriceEdge.
     */
    public function selectNode(?ShopifyPriceListPriceEdgeNodeArgumentsObject $argsObject = null): ShopifyPriceListPriceQueryObject
    {
        $object = new ShopifyPriceListPriceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
