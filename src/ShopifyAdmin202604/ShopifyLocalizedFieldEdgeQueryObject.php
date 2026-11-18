<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one LocalizedField and a cursor during pagination.
 */
class ShopifyLocalizedFieldEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizedFieldEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of LocalizedFieldEdge.
     */
    public function selectNode(?ShopifyLocalizedFieldEdgeNodeArgumentsObject $argsObject = null): ShopifyLocalizedFieldQueryObject
    {
        $object = new ShopifyLocalizedFieldQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
