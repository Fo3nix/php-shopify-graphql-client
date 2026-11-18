<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SubscriptionContract and a cursor during pagination.
 */
class ShopifySubscriptionContractEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SubscriptionContractEdge.
     */
    public function selectNode(?ShopifySubscriptionContractEdgeNodeArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
