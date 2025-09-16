<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class RefundMethodAllocationEnumObject extends EnumObject
{
    const ORIGINAL_PAYMENT_METHODS = "ORIGINAL_PAYMENT_METHODS";
    const STORE_CREDIT = "STORE_CREDIT";
}
