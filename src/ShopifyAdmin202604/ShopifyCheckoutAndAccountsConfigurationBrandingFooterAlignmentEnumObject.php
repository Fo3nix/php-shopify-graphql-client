<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the footer alignment.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFooterAlignmentEnumObject extends EnumObject
{
    /**
     * The checkout footer alignment Start value.
     */
    const START = "START";
    /**
     * The checkout footer alignment Center value.
     */
    const CENTER = "CENTER";
    /**
     * The checkout footer alignment End value.
     */
    const END = "END";
}
