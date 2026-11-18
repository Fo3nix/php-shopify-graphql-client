<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one RefundShippingLine and a cursor during pagination.
 */
class ShopifyRefundShippingLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLineEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of RefundShippingLineEdge.
     */
    public function selectNode(?ShopifyRefundShippingLineEdgeNodeArgumentsObject $argsObject = null): ShopifyRefundShippingLineQueryObject
    {
        $object = new ShopifyRefundShippingLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
