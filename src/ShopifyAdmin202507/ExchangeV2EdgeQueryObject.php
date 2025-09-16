<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeV2EdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Edge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ExchangeV2EdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2QueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
