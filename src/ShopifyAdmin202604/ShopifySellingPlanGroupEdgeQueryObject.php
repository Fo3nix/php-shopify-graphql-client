<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SellingPlanGroup and a cursor during pagination.
 */
class ShopifySellingPlanGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SellingPlanGroupEdge.
     */
    public function selectNode(?ShopifySellingPlanGroupEdgeNodeArgumentsObject $argsObject = null): ShopifySellingPlanGroupQueryObject
    {
        $object = new ShopifySellingPlanGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
