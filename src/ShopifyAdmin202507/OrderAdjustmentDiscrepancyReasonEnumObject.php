<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderAdjustmentDiscrepancyReasonEnumObject extends EnumObject
{
    const RESTOCK = "RESTOCK";
    const DAMAGE = "DAMAGE";
    const CUSTOMER = "CUSTOMER";
    const REFUND_DISCREPANCY = "REFUND_DISCREPANCY";
    const FULL_RETURN_BALANCING_ADJUSTMENT = "FULL_RETURN_BALANCING_ADJUSTMENT";
    const PENDING_REFUND_DISCREPANCY = "PENDING_REFUND_DISCREPANCY";
}
