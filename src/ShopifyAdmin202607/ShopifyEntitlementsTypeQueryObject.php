<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyEntitlementsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EntitlementsType";

    public function selectB2b(ShopifyEntitlementsTypeB2bArgumentsObject $argsObject = null)
    {
        $object = new ShopifyB2BTypeQueryObject("b2b");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

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
