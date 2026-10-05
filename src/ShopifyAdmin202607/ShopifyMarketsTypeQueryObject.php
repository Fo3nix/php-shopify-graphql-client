<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsType";

    public function selectB2b(ShopifyMarketsTypeB2bArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsB2BEntitlementQueryObject("b2b");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRegions(ShopifyMarketsTypeRegionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsRegionsEntitlementQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRetail(ShopifyMarketsTypeRetailArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsRetailEntitlementQueryObject("retail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThemes(ShopifyMarketsTypeThemesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsThemesEntitlementQueryObject("themes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
