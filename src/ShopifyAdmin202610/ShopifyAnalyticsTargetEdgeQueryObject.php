<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AnalyticsTarget and a cursor during pagination.
 */
class ShopifyAnalyticsTargetEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTargetEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AnalyticsTargetEdge.
     */
    public function selectNode(?ShopifyAnalyticsTargetEdgeNodeArgumentsObject $argsObject = null): ShopifyAnalyticsTargetQueryObject
    {
        $object = new ShopifyAnalyticsTargetQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
