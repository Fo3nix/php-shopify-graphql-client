<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * State of the tax app configuration.
 */
class ShopifyTaxPartnerStateEnumObject extends EnumObject
{
    /**
     * App is not configured.
     */
    const PENDING = "PENDING";
    /**
     * App is configured, but not used for tax calculations.
     */
    const READY = "READY";
    /**
     * App is configured and to be used for tax calculations.
     */
    const ACTIVE = "ACTIVE";
}
