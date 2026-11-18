<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PaymentReminderSendUserError`.
 */
class ShopifyPaymentReminderSendUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An error occurred while sending the payment reminder.
     */
    const PAYMENT_REMINDER_SEND_UNSUCCESSFUL = "PAYMENT_REMINDER_SEND_UNSUCCESSFUL";
}
