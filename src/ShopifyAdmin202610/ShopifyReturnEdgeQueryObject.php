<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Return and a cursor during pagination.
 */
class ShopifyReturnEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReturnEdge.
     */
    public function selectNode(?ShopifyReturnEdgeNodeArgumentsObject $argsObject = null): ShopifyReturnQueryObject
    {
        $object = new ShopifyReturnQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
