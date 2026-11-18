<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to refund a return.
 */
class ShopifyReturnRefundInputInputObject extends InputObject
{
    const REQUIRED = ["returnId", "returnRefundLineItems"];

    protected $returnId;
    protected $returnRefundLineItems;
    protected $refundShipping;
    protected $refundDuties;
    protected $orderTransactions;
    protected $notifyCustomer;

    /**
     * The ID of the return.
     */
    public function setReturnId($returnId): static
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * A list of return line items to refund.
     */
    public function setReturnRefundLineItems(array $returnRefundLineItems): static
    {
        $this->returnRefundLineItems = $returnRefundLineItems;

        return $this;
    }

    /**
     * The shipping amount to refund.
     */
    public function setRefundShipping(ShopifyRefundShippingInputInputObject $shopifyRefundShippingInputInputObject): static
    {
        $this->refundShipping = $shopifyRefundShippingInputInputObject;

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
     * A list of transactions involved in refunding the return.
     */
    public function setOrderTransactions(array $orderTransactions): static
    {
        $this->orderTransactions = $orderTransactions;

        return $this;
    }

    /**
     * Whether to send a refund notification to the customer.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }
}
