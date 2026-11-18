<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents how the compare at price will be determined for a price list.
 */
class ShopifyPriceListCompareAtModeEnumObject extends EnumObject
{
    /**
     * The compare at price is adjusted based on percentage specified in price list.
     */
    const ADJUSTED = "ADJUSTED";
    /**
     * The compare at prices are set to `null` unless explicitly defined by a fixed price value.
     */
    const NULLIFY = "NULLIFY";
}
