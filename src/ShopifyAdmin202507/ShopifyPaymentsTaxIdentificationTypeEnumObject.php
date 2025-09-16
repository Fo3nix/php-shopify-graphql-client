<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsTaxIdentificationTypeEnumObject extends EnumObject
{
    const SSN_LAST4_DIGITS = "SSN_LAST4_DIGITS";
    const FULL_SSN = "FULL_SSN";
    const EIN = "EIN";
}
