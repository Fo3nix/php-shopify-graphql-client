<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The state of the payment request receipt.
 */
class ShopifyShopPayPaymentRequestReceiptProcessingStatusStateEnumObject extends EnumObject
{
    /**
     * The payment request is ready and queued to be processed.
     */
    const READY = "READY";
    /**
     * The payment request currently being processed.
     */
    const PROCESSING = "PROCESSING";
    /**
     * The payment request processing failed.
     */
    const FAILED = "FAILED";
    /**
     * The payment request processing completed successfully.
     */
    const COMPLETED = "COMPLETED";
    /**
     * The payment request requires action from the buyer.
     */
    const ACTION_REQUIRED = "ACTION_REQUIRED";
}
