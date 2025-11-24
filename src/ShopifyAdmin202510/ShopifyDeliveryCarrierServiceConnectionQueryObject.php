<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCarrierServiceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceConnection";

    public function selectEdges(ShopifyDeliveryCarrierServiceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeliveryCarrierServiceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeliveryCarrierServiceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
