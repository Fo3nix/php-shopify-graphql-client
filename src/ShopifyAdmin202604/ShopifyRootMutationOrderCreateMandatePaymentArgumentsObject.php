<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCreateMandatePaymentArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "idempotencyKey", "mandateId"];

    protected $id;
    protected $paymentScheduleId;
    protected $idempotencyKey;
    protected $mandateId;
    protected $amount;
    protected $autoCapture;

    /**
     * The ID of the order to collect the balance for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the payment schedule to collect the balance for.
     */
    public function setPaymentScheduleId($paymentScheduleId): static
    {
        $this->paymentScheduleId = $paymentScheduleId;

        return $this;
    }

    /**
     * A unique key to identify the payment request.
     */
    public function setIdempotencyKey($idempotencyKey): static
    {
        $this->idempotencyKey = $idempotencyKey;

        return $this;
    }

    /**
     * The mandate ID used for payment.
     */
    public function setMandateId($mandateId): static
    {
        $this->mandateId = $mandateId;

        return $this;
    }

    /**
     * The payment amount to collect.
     */
    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * Whether the payment should be authorized or captured. If `false`, then the authorization of
     *             the payment is triggered.
     */
    public function setAutoCapture($autoCapture): static
    {
        $this->autoCapture = $autoCapture;

        return $this;
    }
}
