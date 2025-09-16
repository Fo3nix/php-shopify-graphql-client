<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListPriceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPriceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(PriceListPriceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new PriceListPriceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
