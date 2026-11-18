<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The entitlements for region markets.
 */
class ShopifyMarketsRegionsEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsRegionsEntitlement";

    /**
     * The entitlements for region market catalogs.
     */
    public function selectCatalogs(?ShopifyMarketsRegionsEntitlementCatalogsArgumentsObject $argsObject = null): ShopifyMarketsCatalogsEntitlementQueryObject
    {
        $object = new ShopifyMarketsCatalogsEntitlementQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether region markets are enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
