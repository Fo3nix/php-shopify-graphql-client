<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple InventoryScheduledChanges.
 */
class ShopifyInventoryScheduledChangeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChangeConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyInventoryScheduledChangeConnectionEdgesArgumentsObject $argsObject = null): ShopifyInventoryScheduledChangeEdgeQueryObject
    {
        $object = new ShopifyInventoryScheduledChangeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in InventoryScheduledChangeEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyInventoryScheduledChangeConnectionNodesArgumentsObject $argsObject = null): ShopifyInventoryScheduledChangeQueryObject
    {
        $object = new ShopifyInventoryScheduledChangeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyInventoryScheduledChangeConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
