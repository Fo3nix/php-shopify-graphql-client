<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentScheduleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentScheduleConnection";

    public function selectEdges(PaymentScheduleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new PaymentScheduleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(PaymentScheduleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new PaymentScheduleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(PaymentScheduleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
