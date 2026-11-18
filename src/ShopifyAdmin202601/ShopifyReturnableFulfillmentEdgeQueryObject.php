<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReturnableFulfillment and a cursor during pagination.
 */
class ShopifyReturnableFulfillmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReturnableFulfillmentEdge.
     */
    public function selectNode(?ShopifyReturnableFulfillmentEdgeNodeArgumentsObject $argsObject = null): ShopifyReturnableFulfillmentQueryObject
    {
        $object = new ShopifyReturnableFulfillmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
