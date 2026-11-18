<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Collection and a cursor during pagination.
 */
class ShopifyCollectionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CollectionEdge.
     */
    public function selectNode(?ShopifyCollectionEdgeNodeArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
