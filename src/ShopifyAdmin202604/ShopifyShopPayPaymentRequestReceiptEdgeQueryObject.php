<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ShopPayPaymentRequestReceipt and a cursor during pagination.
 */
class ShopifyShopPayPaymentRequestReceiptEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestReceiptEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ShopPayPaymentRequestReceiptEdge.
     */
    public function selectNode(?ShopifyShopPayPaymentRequestReceiptEdgeNodeArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestReceiptQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestReceiptQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
