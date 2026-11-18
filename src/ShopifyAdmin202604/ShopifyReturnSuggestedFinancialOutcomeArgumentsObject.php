<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyReturnSuggestedFinancialOutcomeArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["returnLineItems", "exchangeLineItems"];

    protected $returnLineItems;
    protected $exchangeLineItems;
    protected $refundShipping;
    protected $tipLineId;
    protected $refundDuties;
    protected $refundMethodAllocation;

    /**
     * The line items from the return to include in the outcome.
     */
    public function setReturnLineItems(array $returnLineItems): static
    {
        $this->returnLineItems = $returnLineItems;

        return $this;
    }

    /**
     * The exchange line items from the return to include in the outcome.
     */
    public function setExchangeLineItems(array $exchangeLineItems): static
    {
        $this->exchangeLineItems = $exchangeLineItems;

        return $this;
    }

    /**
     * The shipping amount from the associated order to include as a refund.
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
     * The duties from the associated order to include as a refund.
     */
    public function setRefundDuties(array $refundDuties): static
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    /**
     * Specifies which refund methods to allocate the suggested refund amount to.
     */
    public function setRefundMethodAllocation($shopifyRefundMethodAllocation): static
    {
        $this->refundMethodAllocation = new RawObject($shopifyRefundMethodAllocation);

        return $this;
    }
}
