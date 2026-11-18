<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReverseDelivery and a cursor during pagination.
 */
class ShopifyReverseDeliveryEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReverseDeliveryEdge.
     */
    public function selectNode(?ShopifyReverseDeliveryEdgeNodeArgumentsObject $argsObject = null): ShopifyReverseDeliveryQueryObject
    {
        $object = new ShopifyReverseDeliveryQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
