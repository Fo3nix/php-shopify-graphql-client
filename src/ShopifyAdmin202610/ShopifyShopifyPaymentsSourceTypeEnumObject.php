<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopifyPaymentsSourceTypeEnumObject extends EnumObject
{
    const ADJUSTMENT_REVERSAL = "ADJUSTMENT_REVERSAL";
    const CHARGE = "CHARGE";
    const REFUND = "REFUND";
    const SYSTEM_ADJUSTMENT = "SYSTEM_ADJUSTMENT";
    const DISPUTE = "DISPUTE";
    const ADJUSTMENT = "ADJUSTMENT";
    const TRANSFER = "TRANSFER";
}
