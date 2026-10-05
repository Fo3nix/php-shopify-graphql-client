<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyEntitlementsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EntitlementsType";

    public function selectMarkets(ShopifyEntitlementsTypeMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsTypeQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
