<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CombinedListingChild and a cursor during pagination.
 */
class ShopifyCombinedListingChildEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChildEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CombinedListingChildEdge.
     */
    public function selectNode(?ShopifyCombinedListingChildEdgeNodeArgumentsObject $argsObject = null): ShopifyCombinedListingChildQueryObject
    {
        $object = new ShopifyCombinedListingChildQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
