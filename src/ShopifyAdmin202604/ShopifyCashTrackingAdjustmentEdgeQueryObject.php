<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CashTrackingAdjustment and a cursor during pagination.
 */
class ShopifyCashTrackingAdjustmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustmentEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CashTrackingAdjustmentEdge.
     */
    public function selectNode(?ShopifyCashTrackingAdjustmentEdgeNodeArgumentsObject $argsObject = null): ShopifyCashTrackingAdjustmentQueryObject
    {
        $object = new ShopifyCashTrackingAdjustmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
