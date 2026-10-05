<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryPromiseParticipantConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipantConnection";

    public function selectEdges(ShopifyDeliveryPromiseParticipantConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseParticipantEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryPromiseParticipantConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryPromiseParticipantQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryPromiseParticipantConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
