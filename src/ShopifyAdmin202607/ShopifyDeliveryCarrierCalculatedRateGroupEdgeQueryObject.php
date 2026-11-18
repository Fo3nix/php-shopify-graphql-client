<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryCarrierCalculatedRateGroup and a cursor during pagination.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierCalculatedRateGroupEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryCarrierCalculatedRateGroupEdge.
     */
    public function selectNode(?ShopifyDeliveryCarrierCalculatedRateGroupEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryCarrierCalculatedRateGroupQueryObject
    {
        $object = new ShopifyDeliveryCarrierCalculatedRateGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
