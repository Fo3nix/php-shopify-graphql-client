<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create a refund.
 */
class ShopifyRefundInputInputObject extends InputObject
{
    const REQUIRED = ["orderId"];

    protected $currency;
    protected $orderId;
    protected $note;
    protected $notify;
    protected $shipping;
    protected $processedAt;
    protected $refundLineItems;
    protected $refundDuties;
    protected $transactions;
    protected $refundMethods;
    protected $discrepancyReason;
    protected $allowOverRefunding;

    /**
     * The currency that is used to refund the order. This must be the presentment currency, which is the currency used by the customer. This is a required field for orders where the currency and presentment currency differ.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * The ID of the order that's being refunded.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * An optional note that's attached to the refund.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Whether to send a refund notification to the customer.
     */
    public function setNotify($notify): static
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * The input fields that are required to reimburse shipping costs.
     */
    public function setShipping(ShopifyShippingRefundInputInputObject $shopifyShippingRefundInputInputObject): static
    {
        $this->shipping = $shopifyShippingRefundInputInputObject;

        return $this;
    }

    /**
     * The date and time when the refund is being processed. If not provided, it will be set to the current time.
     */
    public function setProcessedAt($processedAt): static
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    /**
     * A list of line items to refund.
     */
    public function setRefundLineItems(array $refundLineItems): static
    {
        $this->refundLineItems = $refundLineItems;

        return $this;
    }

    /**
     * A list of duties to refund.
     */
    public function setRefundDuties(array $refundDuties): static
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    /**
     * A list of transactions involved in the refund.
     */
    public function setTransactions(array $transactions): static
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * A list of instructions to process the financial outcome of the refund.
     */
    public function setRefundMethods(array $refundMethods): static
    {
        $this->refundMethods = $refundMethods;

        return $this;
    }

    /**
     * An optional reason for a discrepancy between calculated and actual refund amounts.
     */
    public function setDiscrepancyReason($shopifyOrderAdjustmentInputDiscrepancyReason): static
    {
        $this->discrepancyReason = new RawObject($shopifyOrderAdjustmentInputDiscrepancyReason);

        return $this;
    }

    /**
     * Whether refunds to the original payment method can cause the total refunded amount, including previously issued store credit, to exceed the amount paid for the order. Refunds issued as store credit can't exceed the amount paid.
     */
    public function setAllowOverRefunding($allowOverRefunding): static
    {
        $this->allowOverRefunding = $allowOverRefunding;

        return $this;
    }
}
