<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MobilePlatformApplication and a cursor during pagination.
 */
class ShopifyMobilePlatformApplicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MobilePlatformApplicationEdge.
     */
    public function selectNode(?ShopifyMobilePlatformApplicationEdgeNodeArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationUnionObject
    {
        $object = new ShopifyMobilePlatformApplicationUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
