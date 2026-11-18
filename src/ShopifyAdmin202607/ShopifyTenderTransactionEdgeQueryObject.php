<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one TenderTransaction and a cursor during pagination.
 */
class ShopifyTenderTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of TenderTransactionEdge.
     */
    public function selectNode(?ShopifyTenderTransactionEdgeNodeArgumentsObject $argsObject = null): ShopifyTenderTransactionQueryObject
    {
        $object = new ShopifyTenderTransactionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
