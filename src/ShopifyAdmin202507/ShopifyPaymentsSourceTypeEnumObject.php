<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsSourceTypeEnumObject extends EnumObject
{
    const ADJUSTMENT_REVERSAL = "ADJUSTMENT_REVERSAL";
    const CHARGE = "CHARGE";
    const REFUND = "REFUND";
    const SYSTEM_ADJUSTMENT = "SYSTEM_ADJUSTMENT";
    const DISPUTE = "DISPUTE";
    const ADJUSTMENT = "ADJUSTMENT";
    const TRANSFER = "TRANSFER";
}
