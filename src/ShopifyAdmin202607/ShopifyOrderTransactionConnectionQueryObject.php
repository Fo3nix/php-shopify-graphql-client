<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple OrderTransactions.
 */
class ShopifyOrderTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTransactionConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyOrderTransactionConnectionEdgesArgumentsObject $argsObject = null): ShopifyOrderTransactionEdgeQueryObject
    {
        $object = new ShopifyOrderTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in OrderTransactionEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyOrderTransactionConnectionNodesArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyOrderTransactionConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
