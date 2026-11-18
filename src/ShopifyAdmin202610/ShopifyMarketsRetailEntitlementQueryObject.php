<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The entitlements for retail markets.
 */
class ShopifyMarketsRetailEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsRetailEntitlement";

    /**
     * The entitlements for retail market catalogs.
     */
    public function selectCatalogs(?ShopifyMarketsRetailEntitlementCatalogsArgumentsObject $argsObject = null): ShopifyMarketsCatalogsEntitlementQueryObject
    {
        $object = new ShopifyMarketsCatalogsEntitlementQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether retail markets are enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
