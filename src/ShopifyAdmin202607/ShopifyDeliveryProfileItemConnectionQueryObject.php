<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProfileItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileItemConnection";

    public function selectEdges(ShopifyDeliveryProfileItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryProfileItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryProfileItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
