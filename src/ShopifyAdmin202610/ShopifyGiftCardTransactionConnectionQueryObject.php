<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple GiftCardTransactions.
 */
class ShopifyGiftCardTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardTransactionConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyGiftCardTransactionConnectionEdgesArgumentsObject $argsObject = null): ShopifyGiftCardTransactionEdgeQueryObject
    {
        $object = new ShopifyGiftCardTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in GiftCardTransactionEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyGiftCardTransactionConnectionNodesArgumentsObject $argsObject = null): ShopifyGiftCardTransactionInterfaceObject
    {
        $object = new ShopifyGiftCardTransactionInterfaceObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyGiftCardTransactionConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
