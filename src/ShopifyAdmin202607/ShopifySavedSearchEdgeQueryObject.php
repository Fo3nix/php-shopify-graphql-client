<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SavedSearch and a cursor during pagination.
 */
class ShopifySavedSearchEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearchEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SavedSearchEdge.
     */
    public function selectNode(?ShopifySavedSearchEdgeNodeArgumentsObject $argsObject = null): ShopifySavedSearchQueryObject
    {
        $object = new ShopifySavedSearchQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
