<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AnalyticsAnnotation and a cursor during pagination.
 */
class ShopifyAnalyticsAnnotationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AnalyticsAnnotationEdge.
     */
    public function selectNode(?ShopifyAnalyticsAnnotationEdgeNodeArgumentsObject $argsObject = null): ShopifyAnalyticsAnnotationQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
