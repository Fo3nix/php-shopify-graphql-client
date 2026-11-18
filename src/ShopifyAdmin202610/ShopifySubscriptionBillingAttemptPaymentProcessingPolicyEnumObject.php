<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The payment processing policy for a billing attempt.
 */
class ShopifySubscriptionBillingAttemptPaymentProcessingPolicyEnumObject extends EnumObject
{
    /**
     * Attempt to process payment on the billing attempt and fail the billing attempt if
     *         the payment method is not valid or if a payment method does not exist.
     */
    const FAIL_UNLESS_VALID_PAYMENT_METHOD = "FAIL_UNLESS_VALID_PAYMENT_METHOD";
    /**
     * Skip payment processing on the billing attempt and create an unpaid order.
     */
    const SKIP_PAYMENT_AND_CREATE_UNPAID_ORDER = "SKIP_PAYMENT_AND_CREATE_UNPAID_ORDER";
}
