<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one GiftCardTransaction and a cursor during pagination.
 */
class ShopifyGiftCardTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardTransactionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of GiftCardTransactionEdge.
     */
    public function selectNode(?ShopifyGiftCardTransactionEdgeNodeArgumentsObject $argsObject = null): ShopifyGiftCardTransactionInterfaceObject
    {
        $object = new ShopifyGiftCardTransactionInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
