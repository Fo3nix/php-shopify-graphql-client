<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProfileItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileItemConnection";

    public function selectEdges(DeliveryProfileItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryProfileItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryProfileItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
