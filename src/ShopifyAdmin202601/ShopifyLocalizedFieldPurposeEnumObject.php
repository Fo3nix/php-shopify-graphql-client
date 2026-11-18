<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The purpose of a localized field.
 */
class ShopifyLocalizedFieldPurposeEnumObject extends EnumObject
{
    /**
     * Fields that are used for shipping purposes, for example, customs clearance.
     */
    const SHIPPING = "SHIPPING";
    /**
     * Fields that are used for taxes purposes, for example, invoicing.
     */
    const TAX = "TAX";
}
