<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CalculatedDiscountApplication and a cursor during pagination.
 */
class ShopifyCalculatedDiscountApplicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedDiscountApplicationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CalculatedDiscountApplicationEdge.
     */
    public function selectNode(?ShopifyCalculatedDiscountApplicationEdgeNodeArgumentsObject $argsObject = null): ShopifyCalculatedDiscountApplicationInterfaceObject
    {
        $object = new ShopifyCalculatedDiscountApplicationInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
