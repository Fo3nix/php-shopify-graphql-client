<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListPriceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPriceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPriceListPriceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListPriceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
