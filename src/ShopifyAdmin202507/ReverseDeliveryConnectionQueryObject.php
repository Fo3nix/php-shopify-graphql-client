<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryConnection";

    public function selectEdges(ReverseDeliveryConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ReverseDeliveryConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ReverseDeliveryConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
