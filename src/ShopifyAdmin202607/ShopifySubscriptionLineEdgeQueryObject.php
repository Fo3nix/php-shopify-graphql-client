<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SubscriptionLine and a cursor during pagination.
 */
class ShopifySubscriptionLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLineEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SubscriptionLineEdge.
     */
    public function selectNode(?ShopifySubscriptionLineEdgeNodeArgumentsObject $argsObject = null): ShopifySubscriptionLineQueryObject
    {
        $object = new ShopifySubscriptionLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
