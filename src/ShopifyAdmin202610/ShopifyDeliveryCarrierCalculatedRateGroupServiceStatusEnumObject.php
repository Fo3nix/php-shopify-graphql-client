<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Whether a carrier-provided service is included at checkout.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupServiceStatusEnumObject extends EnumObject
{
    /**
     * The service is included at checkout.
     */
    const INCLUDED = "INCLUDED";
    /**
     * The service is excluded at checkout.
     */
    const EXCLUDED = "EXCLUDED";
}
