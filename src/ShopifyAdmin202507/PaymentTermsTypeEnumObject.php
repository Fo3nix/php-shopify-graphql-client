<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class PaymentTermsTypeEnumObject extends EnumObject
{
    const RECEIPT = "RECEIPT";
    const NET = "NET";
    const FIXED = "FIXED";
    const FULFILLMENT = "FULFILLMENT";
    const UNKNOWN = "UNKNOWN";
}
