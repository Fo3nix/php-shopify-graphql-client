<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The associated catalog's type.
 */
class ShopifyCatalogTypeEnumObject extends EnumObject
{
    /**
     * Not associated to a catalog.
     */
    const NONE = "NONE";
    /**
     * Catalogs belonging to apps.
     */
    const APP = "APP";
    /**
     * Catalogs belonging to company locations.
     */
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    /**
     * Catalogs belonging to markets.
     */
    const MARKET = "MARKET";
}
