<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Rollout and a cursor during pagination.
 */
class ShopifyRolloutEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of RolloutEdge.
     */
    public function selectNode(?ShopifyRolloutEdgeNodeArgumentsObject $argsObject = null): ShopifyRolloutQueryObject
    {
        $object = new ShopifyRolloutQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
