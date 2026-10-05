<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentScheduleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentScheduleConnection";

    public function selectEdges(ShopifyPaymentScheduleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentScheduleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentScheduleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentScheduleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentScheduleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
