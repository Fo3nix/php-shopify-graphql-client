<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DiscountAutomaticNode and a cursor during pagination.
 */
class ShopifyDiscountAutomaticNodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticNodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DiscountAutomaticNodeEdge.
     */
    public function selectNode(?ShopifyDiscountAutomaticNodeEdgeNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
