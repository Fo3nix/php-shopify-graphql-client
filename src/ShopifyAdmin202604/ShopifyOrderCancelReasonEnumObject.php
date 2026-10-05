<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyOrderCancelReasonEnumObject extends EnumObject
{
    const CUSTOMER = "CUSTOMER";
    const DECLINED = "DECLINED";
    const FRAUD = "FRAUD";
    const INVENTORY = "INVENTORY";
    const STAFF = "STAFF";
    const OTHER = "OTHER";
}
