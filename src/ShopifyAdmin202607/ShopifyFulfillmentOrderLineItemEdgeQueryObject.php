<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one FulfillmentOrderLineItem and a cursor during pagination.
 */
class ShopifyFulfillmentOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of FulfillmentOrderLineItemEdge.
     */
    public function selectNode(?ShopifyFulfillmentOrderLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLineItemQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
