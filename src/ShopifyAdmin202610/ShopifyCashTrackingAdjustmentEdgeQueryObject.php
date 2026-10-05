<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashTrackingAdjustmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCashTrackingAdjustmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingAdjustmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
