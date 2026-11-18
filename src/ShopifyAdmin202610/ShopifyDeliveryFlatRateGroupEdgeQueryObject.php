<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryFlatRateGroup and a cursor during pagination.
 */
class ShopifyDeliveryFlatRateGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryFlatRateGroupEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryFlatRateGroupEdge.
     */
    public function selectNode(?ShopifyDeliveryFlatRateGroupEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryFlatRateGroupQueryObject
    {
        $object = new ShopifyDeliveryFlatRateGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
