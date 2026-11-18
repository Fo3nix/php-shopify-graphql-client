<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryValueBasedRateGroup and a cursor during pagination.
 */
class ShopifyDeliveryValueBasedRateGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryValueBasedRateGroupEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryValueBasedRateGroupEdge.
     */
    public function selectNode(?ShopifyDeliveryValueBasedRateGroupEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryValueBasedRateGroupQueryObject
    {
        $object = new ShopifyDeliveryValueBasedRateGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
