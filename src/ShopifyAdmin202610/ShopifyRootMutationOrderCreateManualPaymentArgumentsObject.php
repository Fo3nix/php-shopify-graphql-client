<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationOrderCreateManualPaymentArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $amount;
    protected $paymentMethodName;
    protected $processedAt;

    /**
     * The ID of the order to create a manual payment for.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The manual payment amount to be created.
     */
    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The name of the payment method used for creating the payment. If none is provided, then the default manual payment method ('Other') will be used.
     */
    public function setPaymentMethodName($paymentMethodName): static
    {
        $this->paymentMethodName = $paymentMethodName;

        return $this;
    }

    /**
     * The date and time ([ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format) when a manual payment was processed. If you're importing transactions from an app or another platform, then you can set processedAt to a date and time in the past to match when the original transaction was created.
     */
    public function setProcessedAt($processedAt): static
    {
        $this->processedAt = $processedAt;

        return $this;
    }
}
