<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEventEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMarketingEventEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
