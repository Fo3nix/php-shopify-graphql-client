<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryWeightBasedRate and a cursor during pagination.
 */
class ShopifyDeliveryWeightBasedRateEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryWeightBasedRateEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryWeightBasedRateEdge.
     */
    public function selectNode(?ShopifyDeliveryWeightBasedRateEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryWeightBasedRateQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedRateQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
