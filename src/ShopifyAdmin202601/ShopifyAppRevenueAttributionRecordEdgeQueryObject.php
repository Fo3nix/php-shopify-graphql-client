<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AppRevenueAttributionRecord and a cursor during pagination.
 */
class ShopifyAppRevenueAttributionRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecordEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AppRevenueAttributionRecordEdge.
     */
    public function selectNode(?ShopifyAppRevenueAttributionRecordEdgeNodeArgumentsObject $argsObject = null): ShopifyAppRevenueAttributionRecordQueryObject
    {
        $object = new ShopifyAppRevenueAttributionRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
