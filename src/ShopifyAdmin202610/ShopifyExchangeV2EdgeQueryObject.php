<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeV2EdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Edge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyExchangeV2EdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2QueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
