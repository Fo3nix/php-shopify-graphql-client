<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PaymentScheduleCaptureUserError`.
 */
class ShopifyPaymentScheduleCaptureUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Errors for capturing a scheduled payment.
     */
    const PAYMENT_SCHEDULE_CAPTURE_ERROR_CODE = "PAYMENT_SCHEDULE_CAPTURE_ERROR_CODE";
}
