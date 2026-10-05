<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketCatalogEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCatalogEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMarketCatalogEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketCatalogQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
