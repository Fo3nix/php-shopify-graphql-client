<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class EntitlementsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EntitlementsType";

    public function selectMarkets(EntitlementsTypeMarketsArgumentsObject $argsObject = null)
    {
        $object = new MarketsTypeQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
