<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProfileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileConnection";

    public function selectEdges(ShopifyDeliveryProfileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryProfileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryProfileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
