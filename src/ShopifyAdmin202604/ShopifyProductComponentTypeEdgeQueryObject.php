<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ProductComponentType and a cursor during pagination.
 */
class ShopifyProductComponentTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentTypeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ProductComponentTypeEdge.
     */
    public function selectNode(?ShopifyProductComponentTypeEdgeNodeArgumentsObject $argsObject = null): ShopifyProductComponentTypeQueryObject
    {
        $object = new ShopifyProductComponentTypeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
