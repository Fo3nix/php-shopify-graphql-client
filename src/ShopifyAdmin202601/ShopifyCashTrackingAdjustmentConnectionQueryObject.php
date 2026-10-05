<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashTrackingAdjustmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustmentConnection";

    public function selectEdges(ShopifyCashTrackingAdjustmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingAdjustmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCashTrackingAdjustmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingAdjustmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCashTrackingAdjustmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
