<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeConnection";

    public function selectEdges(ShopifyPaymentsDisputeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentsDisputeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentsDisputeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
