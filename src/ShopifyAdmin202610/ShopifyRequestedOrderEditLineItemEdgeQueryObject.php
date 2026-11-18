<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one RequestedOrderEditLineItem and a cursor during pagination.
 */
class ShopifyRequestedOrderEditLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of RequestedOrderEditLineItemEdge.
     */
    public function selectNode(?ShopifyRequestedOrderEditLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyRequestedOrderEditLineItemQueryObject
    {
        $object = new ShopifyRequestedOrderEditLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
