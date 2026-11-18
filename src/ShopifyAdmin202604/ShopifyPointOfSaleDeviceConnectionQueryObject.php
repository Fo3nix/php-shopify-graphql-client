<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple PointOfSaleDevices.
 */
class ShopifyPointOfSaleDeviceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDeviceConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyPointOfSaleDeviceConnectionEdgesArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceEdgeQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in PointOfSaleDeviceEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyPointOfSaleDeviceConnectionNodesArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyPointOfSaleDeviceConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
