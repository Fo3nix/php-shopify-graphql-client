<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple InventoryShipmentLineItems.
 */
class ShopifyInventoryShipmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItemConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyInventoryShipmentLineItemConnectionEdgesArgumentsObject $argsObject = null): ShopifyInventoryShipmentLineItemEdgeQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in InventoryShipmentLineItemEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyInventoryShipmentLineItemConnectionNodesArgumentsObject $argsObject = null): ShopifyInventoryShipmentLineItemQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyInventoryShipmentLineItemConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
