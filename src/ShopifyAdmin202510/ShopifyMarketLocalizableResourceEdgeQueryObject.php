<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketLocalizableResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResourceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMarketLocalizableResourceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
