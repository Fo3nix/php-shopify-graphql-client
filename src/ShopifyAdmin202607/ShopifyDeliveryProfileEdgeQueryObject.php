<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryProfile and a cursor during pagination.
 */
class ShopifyDeliveryProfileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryProfileEdge.
     */
    public function selectNode(?ShopifyDeliveryProfileEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryProfileQueryObject
    {
        $object = new ShopifyDeliveryProfileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
