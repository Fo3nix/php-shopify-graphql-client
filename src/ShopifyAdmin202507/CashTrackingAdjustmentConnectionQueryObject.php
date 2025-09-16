<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashTrackingAdjustmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustmentConnection";

    public function selectEdges(CashTrackingAdjustmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingAdjustmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CashTrackingAdjustmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingAdjustmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CashTrackingAdjustmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
