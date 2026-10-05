<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketWebPresenceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresenceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMarketWebPresenceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
