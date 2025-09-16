<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryLocationGroupZoneConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZoneConnection";

    public function selectEdges(DeliveryLocationGroupZoneConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLocationGroupZoneEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryLocationGroupZoneConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLocationGroupZoneQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryLocationGroupZoneConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
