<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketWebPresenceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresenceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MarketWebPresenceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
