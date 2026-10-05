<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentTermsTypeEnumObject extends EnumObject
{
    const RECEIPT = "RECEIPT";
    const NET = "NET";
    const FIXED = "FIXED";
    const FULFILLMENT = "FULFILLMENT";
    const UNKNOWN = "UNKNOWN";
}
