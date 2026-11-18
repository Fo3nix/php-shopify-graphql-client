<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPaymentScheduleCaptureArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["paymentScheduleId"];

    protected $paymentScheduleId;

    /**
     * The ID of the payment schedule to capture payment for.
     */
    public function setPaymentScheduleId($paymentScheduleId): static
    {
        $this->paymentScheduleId = $paymentScheduleId;

        return $this;
    }
}
