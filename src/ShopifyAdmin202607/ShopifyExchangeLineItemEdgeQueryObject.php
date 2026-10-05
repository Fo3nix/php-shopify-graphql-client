<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyExchangeLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
