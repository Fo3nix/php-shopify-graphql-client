<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the spacing.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSpacingEnumObject extends EnumObject
{
    /**
     * The None spacing.
     */
    const NONE = "NONE";
    /**
     * The Extra Tight spacing.
     */
    const EXTRA_TIGHT = "EXTRA_TIGHT";
    /**
     * The Tight spacing.
     */
    const TIGHT = "TIGHT";
    /**
     * The Base spacing.
     */
    const BASE = "BASE";
    /**
     * The Loose spacing.
     */
    const LOOSE = "LOOSE";
    /**
     * The Extra Loose spacing.
     */
    const EXTRA_LOOSE = "EXTRA_LOOSE";
}
