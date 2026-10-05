<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyPaymentsTaxIdentificationTypeEnumObject extends EnumObject
{
    const SSN_LAST4_DIGITS = "SSN_LAST4_DIGITS";
    const FULL_SSN = "FULL_SSN";
    const EIN = "EIN";
}
