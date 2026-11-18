<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReverseFulfillmentOrderLineItem and a cursor during pagination.
 */
class ShopifyReverseFulfillmentOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItemEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReverseFulfillmentOrderLineItemEdge.
     */
    public function selectNode(?ShopifyReverseFulfillmentOrderLineItemEdgeNodeArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderLineItemQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
