<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CollectionExclusionProductSelection and a cursor during pagination.
 */
class ShopifyCollectionExclusionProductSelectionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionExclusionProductSelectionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CollectionExclusionProductSelectionEdge.
     */
    public function selectNode(?ShopifyCollectionExclusionProductSelectionEdgeNodeArgumentsObject $argsObject = null): ShopifyCollectionExclusionProductSelectionQueryObject
    {
        $object = new ShopifyCollectionExclusionProductSelectionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
