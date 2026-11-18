<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryWeightBasedRateGroup and a cursor during pagination.
 */
class ShopifyDeliveryWeightBasedRateGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryWeightBasedRateGroupEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryWeightBasedRateGroupEdge.
     */
    public function selectNode(?ShopifyDeliveryWeightBasedRateGroupEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryWeightBasedRateGroupQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedRateGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
