<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPointOfSaleDeviceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDeviceConnection";

    public function selectEdges(ShopifyPointOfSaleDeviceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPointOfSaleDeviceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPointOfSaleDeviceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
