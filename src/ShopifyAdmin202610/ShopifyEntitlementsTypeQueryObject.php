<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shop's entitlements.
 */
class ShopifyEntitlementsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "EntitlementsType";

    /**
     * The shop's B2B entitlements.
     */
    public function selectB2b(?ShopifyEntitlementsTypeB2bArgumentsObject $argsObject = null): ShopifyB2BTypeQueryObject
    {
        $object = new ShopifyB2BTypeQueryObject("b2b");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

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
