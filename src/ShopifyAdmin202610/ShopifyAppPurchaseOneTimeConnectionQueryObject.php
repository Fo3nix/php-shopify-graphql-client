<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple AppPurchaseOneTimes.
 */
class ShopifyAppPurchaseOneTimeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyAppPurchaseOneTimeConnectionEdgesArgumentsObject $argsObject = null): ShopifyAppPurchaseOneTimeEdgeQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in AppPurchaseOneTimeEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyAppPurchaseOneTimeConnectionNodesArgumentsObject $argsObject = null): ShopifyAppPurchaseOneTimeQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyAppPurchaseOneTimeConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
