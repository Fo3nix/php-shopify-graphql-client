<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyShopPayPaymentRequestReceiptProcessingStatusStateEnumObject extends EnumObject
{
    const READY = "READY";
    const PROCESSING = "PROCESSING";
    const FAILED = "FAILED";
    const COMPLETED = "COMPLETED";
    const ACTION_REQUIRED = "ACTION_REQUIRED";
}
