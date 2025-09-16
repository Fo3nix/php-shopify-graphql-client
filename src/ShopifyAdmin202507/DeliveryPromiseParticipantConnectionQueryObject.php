<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryPromiseParticipantConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipantConnection";

    public function selectEdges(DeliveryPromiseParticipantConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseParticipantEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryPromiseParticipantConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryPromiseParticipantQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryPromiseParticipantConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
