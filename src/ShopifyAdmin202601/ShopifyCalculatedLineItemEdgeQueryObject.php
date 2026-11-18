<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CalculatedLineItem and a cursor during pagination.
 */
class ShopifyCalculatedLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CalculatedLineItemEdge.
     */
    public function selectNode(?ShopifyCalculatedLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyCalculatedLineItemQueryObject
    {
        $object = new ShopifyCalculatedLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
