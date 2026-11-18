<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CollectionConditionsSource and a cursor during pagination.
 */
class ShopifyCollectionConditionsSourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourceEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CollectionConditionsSourceEdge.
     */
    public function selectNode(?ShopifyCollectionConditionsSourceEdgeNodeArgumentsObject $argsObject = null): ShopifyCollectionConditionsSourceQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
