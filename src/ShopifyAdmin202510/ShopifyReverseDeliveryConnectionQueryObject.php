<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryConnection";

    public function selectEdges(ShopifyReverseDeliveryConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReverseDeliveryConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReverseDeliveryConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
