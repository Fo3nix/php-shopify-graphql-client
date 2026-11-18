<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CartTransform and a cursor during pagination.
 */
class ShopifyCartTransformEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CartTransformEdge.
     */
    public function selectNode(?ShopifyCartTransformEdgeNodeArgumentsObject $argsObject = null): ShopifyCartTransformQueryObject
    {
        $object = new ShopifyCartTransformQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
