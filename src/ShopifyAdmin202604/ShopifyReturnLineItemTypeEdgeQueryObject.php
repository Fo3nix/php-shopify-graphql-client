<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReturnLineItemType and a cursor during pagination.
 */
class ShopifyReturnLineItemTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnLineItemTypeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReturnLineItemTypeEdge.
     */
    public function selectNode(?ShopifyReturnLineItemTypeEdgeNodeArgumentsObject $argsObject = null): ShopifyReturnLineItemTypeInterfaceObject
    {
        $object = new ShopifyReturnLineItemTypeInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
