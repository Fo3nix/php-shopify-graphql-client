<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashTrackingSessionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSessionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CashTrackingSessionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingSessionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
