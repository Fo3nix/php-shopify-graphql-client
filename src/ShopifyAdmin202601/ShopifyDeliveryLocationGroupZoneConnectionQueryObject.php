<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryLocationGroupZoneConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZoneConnection";

    public function selectEdges(ShopifyDeliveryLocationGroupZoneConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryLocationGroupZoneEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryLocationGroupZoneConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryLocationGroupZoneQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryLocationGroupZoneConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
