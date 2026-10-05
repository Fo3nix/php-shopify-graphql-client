<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashTrackingSessionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSessionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCashTrackingSessionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingSessionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
