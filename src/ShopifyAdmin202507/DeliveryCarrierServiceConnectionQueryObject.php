<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCarrierServiceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceConnection";

    public function selectEdges(DeliveryCarrierServiceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DeliveryCarrierServiceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DeliveryCarrierServiceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
