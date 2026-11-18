<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DiscountAutomatic and a cursor during pagination.
 */
class ShopifyDiscountAutomaticEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DiscountAutomaticEdge.
     */
    public function selectNode(?ShopifyDiscountAutomaticEdgeNodeArgumentsObject $argsObject = null): ShopifyDiscountAutomaticUnionObject
    {
        $object = new ShopifyDiscountAutomaticUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
