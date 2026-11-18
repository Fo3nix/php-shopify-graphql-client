<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AppUsageRecord and a cursor during pagination.
 */
class ShopifyAppUsageRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecordEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AppUsageRecordEdge.
     */
    public function selectNode(?ShopifyAppUsageRecordEdgeNodeArgumentsObject $argsObject = null): ShopifyAppUsageRecordQueryObject
    {
        $object = new ShopifyAppUsageRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
