<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentReminderSendArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["paymentScheduleId"];

    protected $paymentScheduleId;

    /**
     * The payment schedule id associated with the reminder.
     */
    public function setPaymentScheduleId($paymentScheduleId): static
    {
        $this->paymentScheduleId = $paymentScheduleId;

        return $this;
    }
}
