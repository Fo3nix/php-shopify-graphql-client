<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryValueBasedRate and a cursor during pagination.
 */
class ShopifyDeliveryValueBasedRateEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryValueBasedRateEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryValueBasedRateEdge.
     */
    public function selectNode(?ShopifyDeliveryValueBasedRateEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryValueBasedRateQueryObject
    {
        $object = new ShopifyDeliveryValueBasedRateQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
