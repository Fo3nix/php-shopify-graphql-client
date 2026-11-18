<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one OnlineStoreThemeFile and a cursor during pagination.
 */
class ShopifyOnlineStoreThemeFileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of OnlineStoreThemeFileEdge.
     */
    public function selectNode(?ShopifyOnlineStoreThemeFileEdgeNodeArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
