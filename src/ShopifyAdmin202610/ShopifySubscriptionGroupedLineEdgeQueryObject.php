<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SubscriptionGroupedLine and a cursor during pagination.
 */
class ShopifySubscriptionGroupedLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionGroupedLineEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SubscriptionGroupedLineEdge.
     */
    public function selectNode(?ShopifySubscriptionGroupedLineEdgeNodeArgumentsObject $argsObject = null): ShopifySubscriptionGroupedLineUnionObject
    {
        $object = new ShopifySubscriptionGroupedLineUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
