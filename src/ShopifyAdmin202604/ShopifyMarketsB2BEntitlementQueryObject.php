<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The entitlements for B2B markets.
 */
class ShopifyMarketsB2BEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsB2BEntitlement";

    /**
     * The entitlements for B2B market catalogs.
     */
    public function selectCatalogs(?ShopifyMarketsB2BEntitlementCatalogsArgumentsObject $argsObject = null): ShopifyMarketsCatalogsEntitlementQueryObject
    {
        $object = new ShopifyMarketsCatalogsEntitlementQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether B2B markets are enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
