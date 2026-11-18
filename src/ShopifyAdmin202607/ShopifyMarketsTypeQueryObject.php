<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Markets entitlement information.
 */
class ShopifyMarketsTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsType";

    /**
     * The entitlements for B2B markets.
     */
    public function selectB2b(?ShopifyMarketsTypeB2bArgumentsObject $argsObject = null): ShopifyMarketsB2BEntitlementQueryObject
    {
        $object = new ShopifyMarketsB2BEntitlementQueryObject("b2b");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The entitlements for region markets.
     */
    public function selectRegions(?ShopifyMarketsTypeRegionsArgumentsObject $argsObject = null): ShopifyMarketsRegionsEntitlementQueryObject
    {
        $object = new ShopifyMarketsRegionsEntitlementQueryObject("regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The entitlements for retail markets.
     */
    public function selectRetail(?ShopifyMarketsTypeRetailArgumentsObject $argsObject = null): ShopifyMarketsRetailEntitlementQueryObject
    {
        $object = new ShopifyMarketsRetailEntitlementQueryObject("retail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The entitlements for themes.
     */
    public function selectThemes(?ShopifyMarketsTypeThemesArgumentsObject $argsObject = null): ShopifyMarketsThemesEntitlementQueryObject
    {
        $object = new ShopifyMarketsThemesEntitlementQueryObject("themes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
