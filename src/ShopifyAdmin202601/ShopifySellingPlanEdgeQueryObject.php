<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SellingPlan and a cursor during pagination.
 */
class ShopifySellingPlanEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SellingPlanEdge.
     */
    public function selectNode(?ShopifySellingPlanEdgeNodeArgumentsObject $argsObject = null): ShopifySellingPlanQueryObject
    {
        $object = new ShopifySellingPlanQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
