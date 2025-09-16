<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopPayPaymentRequestReceiptProcessingStatusStateEnumObject extends EnumObject
{
    const READY = "READY";
    const PROCESSING = "PROCESSING";
    const FAILED = "FAILED";
    const COMPLETED = "COMPLETED";
    const ACTION_REQUIRED = "ACTION_REQUIRED";
}
