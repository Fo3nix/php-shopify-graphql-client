<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple OnlineStoreThemeFiles.
 */
class ShopifyOnlineStoreThemeFileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyOnlineStoreThemeFileConnectionEdgesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileEdgeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in OnlineStoreThemeFileEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyOnlineStoreThemeFileConnectionNodesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyOnlineStoreThemeFileConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of errors that occurred during the request.
     */
    public function selectUserErrors(?ShopifyOnlineStoreThemeFileConnectionUserErrorsArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileReadResultQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileReadResultQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
