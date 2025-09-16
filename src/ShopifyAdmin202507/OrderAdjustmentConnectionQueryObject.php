<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderAdjustmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAdjustmentConnection";

    public function selectEdges(OrderAdjustmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new OrderAdjustmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(OrderAdjustmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new OrderAdjustmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(OrderAdjustmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
