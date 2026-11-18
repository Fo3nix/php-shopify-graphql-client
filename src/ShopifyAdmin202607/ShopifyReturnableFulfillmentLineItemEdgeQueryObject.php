<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReturnableFulfillmentLineItem and a cursor during pagination.
 */
class ShopifyReturnableFulfillmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReturnableFulfillmentLineItemEdge.
     */
    public function selectNode(?ShopifyReturnableFulfillmentLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyReturnableFulfillmentLineItemQueryObject
    {
        $object = new ShopifyReturnableFulfillmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
