<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReverseDeliveryLineItem and a cursor during pagination.
 */
class ShopifyReverseDeliveryLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReverseDeliveryLineItemEdge.
     */
    public function selectNode(?ShopifyReverseDeliveryLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyReverseDeliveryLineItemQueryObject
    {
        $object = new ShopifyReverseDeliveryLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
