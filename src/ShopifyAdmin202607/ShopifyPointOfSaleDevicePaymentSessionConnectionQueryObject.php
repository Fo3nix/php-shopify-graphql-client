<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPointOfSaleDevicePaymentSessionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSessionConnection";

    public function selectEdges(ShopifyPointOfSaleDevicePaymentSessionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPointOfSaleDevicePaymentSessionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPointOfSaleDevicePaymentSessionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
