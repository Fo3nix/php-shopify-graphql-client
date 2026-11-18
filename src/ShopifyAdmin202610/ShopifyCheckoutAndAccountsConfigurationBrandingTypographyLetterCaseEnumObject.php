<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible values for the typography letter case.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTypographyLetterCaseEnumObject extends EnumObject
{
    /**
     * All letters are is lower case.
     */
    const LOWER = "LOWER";
    /**
     * No letter casing applied.
     */
    const NONE = "NONE";
    /**
     * Capitalize the first letter of each word.
     */
    const TITLE = "TITLE";
    /**
     * All letters are uppercase.
     */
    const UPPER = "UPPER";
}
