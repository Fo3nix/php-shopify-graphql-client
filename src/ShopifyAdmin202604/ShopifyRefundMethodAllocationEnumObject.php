<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyRefundMethodAllocationEnumObject extends EnumObject
{
    const ORIGINAL_PAYMENT_METHODS = "ORIGINAL_PAYMENT_METHODS";
    const STORE_CREDIT = "STORE_CREDIT";
}
