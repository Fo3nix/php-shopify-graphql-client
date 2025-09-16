<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashTrackingAdjustmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingAdjustmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CashTrackingAdjustmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingAdjustmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
