<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingActivityEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMarketingActivityEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingActivityQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
