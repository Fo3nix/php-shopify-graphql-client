<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CollectionConditionsSourcesByApp and a cursor during pagination.
 */
class ShopifyCollectionConditionsSourcesByAppEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourcesByAppEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CollectionConditionsSourcesByAppEdge.
     */
    public function selectNode(?ShopifyCollectionConditionsSourcesByAppEdgeNodeArgumentsObject $argsObject = null): ShopifyCollectionConditionsSourcesByAppQueryObject
    {
        $object = new ShopifyCollectionConditionsSourcesByAppQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
