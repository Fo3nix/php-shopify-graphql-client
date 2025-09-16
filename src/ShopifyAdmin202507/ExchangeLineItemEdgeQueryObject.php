<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ExchangeLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ExchangeLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
