<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DiscountRedeemCodeBulkCreationCode and a cursor during pagination.
 */
class ShopifyDiscountRedeemCodeBulkCreationCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreationCodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DiscountRedeemCodeBulkCreationCodeEdge.
     */
    public function selectNode(?ShopifyDiscountRedeemCodeBulkCreationCodeEdgeNodeArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeBulkCreationCodeQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
