<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ShippingLine and a cursor during pagination.
 */
class ShopifyShippingLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLineEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ShippingLineEdge.
     */
    public function selectNode(?ShopifyShippingLineEdgeNodeArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
