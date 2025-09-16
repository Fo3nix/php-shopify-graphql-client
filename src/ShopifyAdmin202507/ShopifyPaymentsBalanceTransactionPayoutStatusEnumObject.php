<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsBalanceTransactionPayoutStatusEnumObject extends EnumObject
{
    const SCHEDULED = "SCHEDULED";
    const PAID = "PAID";
    const FAILED = "FAILED";
    const CANCELED = "CANCELED";
    const PENDING = "PENDING";
    const ACTION_REQUIRED = "ACTION_REQUIRED";
}
