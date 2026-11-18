<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Highest level of validation concerns identified for the address.
 */
class ShopifyMailingAddressValidationResultEnumObject extends EnumObject
{
    /**
     * Indicates that the address has been validated and no issues were found.
     */
    const NO_ISSUES = "NO_ISSUES";
    /**
     * Indicates that the address has been validated and is very likely to contain invalid information.
     */
    const ERROR = "ERROR";
    /**
     * Indicates that the address has been validated and might contain invalid information.
     */
    const WARNING = "WARNING";
}
