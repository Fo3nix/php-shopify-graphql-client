<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for processing a return.
 */
class ShopifyReturnProcessInputInputObject extends InputObject
{
    const REQUIRED = ["returnId"];

    protected $returnId;
    protected $returnLineItems;
    protected $exchangeLineItems;
    protected $refundDuties;
    protected $refundShipping;
    protected $tipLineId;
    protected $note;
    protected $notifyCustomer;
    protected $financialTransfer;

    /**
     * The ID of the return to be processed.
     */
    public function setReturnId($returnId): static
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * The return line items list to be handled.
     */
    public function setReturnLineItems(array $returnLineItems): static
    {
        $this->returnLineItems = $returnLineItems;

        return $this;
    }

    /**
     * The exchange line items list to be handled.
     */
    public function setExchangeLineItems(array $exchangeLineItems): static
    {
        $this->exchangeLineItems = $exchangeLineItems;

        return $this;
    }

    /**
     * The refund duties list to be handled.
     */
    public function setRefundDuties(array $refundDuties): static
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    /**
     * The shipping cost to refund.
     */
    public function setRefundShipping(ShopifyRefundShippingInputInputObject $shopifyRefundShippingInputInputObject): static
    {
        $this->refundShipping = $shopifyRefundShippingInputInputObject;

        return $this;
    }

    /**
     * ID of the tip line item.
     */
    public function setTipLineId($tipLineId): static
    {
        $this->tipLineId = $tipLineId;

        return $this;
    }

    /**
     * The note for the return.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Whether to notify the customer about the return.
     */
    public function setNotifyCustomer($notifyCustomer): static
    {
        $this->notifyCustomer = $notifyCustomer;

        return $this;
    }

    /**
     * The financial transfer for the return.
     */
    public function setFinancialTransfer(ShopifyReturnProcessFinancialTransferInputInputObject $shopifyReturnProcessFinancialTransferInputInputObject): static
    {
        $this->financialTransfer = $shopifyReturnProcessFinancialTransferInputInputObject;

        return $this;
    }
}
