<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shop's entitlements.
 */
class ShopifyEntitlementsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EntitlementsType";

    /**
     * Represents the markets for the shop.
     */
    public function selectMarkets(?ShopifyEntitlementsTypeMarketsArgumentsObject $argsObject = null): ShopifyMarketsTypeQueryObject
    {
        $object = new ShopifyMarketsTypeQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
