<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCustomizationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationConnection";

    public function selectEdges(ShopifyDeliveryCustomizationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCustomizationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryCustomizationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCustomizationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryCustomizationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
