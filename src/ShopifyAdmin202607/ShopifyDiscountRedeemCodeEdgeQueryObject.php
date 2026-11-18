<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DiscountRedeemCode and a cursor during pagination.
 */
class ShopifyDiscountRedeemCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DiscountRedeemCodeEdge.
     */
    public function selectNode(?ShopifyDiscountRedeemCodeEdgeNodeArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
