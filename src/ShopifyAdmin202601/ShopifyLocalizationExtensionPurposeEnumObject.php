<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The purpose of a localization extension.
 */
class ShopifyLocalizationExtensionPurposeEnumObject extends EnumObject
{
    /**
     * Extensions that are used for shipping purposes, for example, customs clearance.
     */
    const SHIPPING = "SHIPPING";
    /**
     * Extensions that are used for taxes purposes, for example, invoicing.
     */
    const TAX = "TAX";
}
