<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ShopifyPaymentsBankAccount and a cursor during pagination.
 */
class ShopifyShopifyPaymentsBankAccountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccountEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ShopifyPaymentsBankAccountEdge.
     */
    public function selectNode(?ShopifyShopifyPaymentsBankAccountEdgeNodeArgumentsObject $argsObject = null): ShopifyShopifyPaymentsBankAccountQueryObject
    {
        $object = new ShopifyShopifyPaymentsBankAccountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
