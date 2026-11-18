<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CalculatedRequestedOrderEditLineItem and a cursor during pagination.
 */
class ShopifyCalculatedRequestedOrderEditLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEditLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CalculatedRequestedOrderEditLineItemEdge.
     */
    public function selectNode(?ShopifyCalculatedRequestedOrderEditLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyCalculatedRequestedOrderEditLineItemQueryObject
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
