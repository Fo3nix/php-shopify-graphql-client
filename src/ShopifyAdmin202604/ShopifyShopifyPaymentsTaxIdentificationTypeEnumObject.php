<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of tax identification field.
 */
class ShopifyShopifyPaymentsTaxIdentificationTypeEnumObject extends EnumObject
{
    /**
     * The last 4 digits of the SSN.
     */
    const SSN_LAST4_DIGITS = "SSN_LAST4_DIGITS";
    /**
     * Full SSN.
     */
    const FULL_SSN = "FULL_SSN";
    /**
     * Business EIN.
     */
    const EIN = "EIN";
}
