<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ReturnSuggestedFinancialOutcomeArgumentsObject extends ArgumentsObject
{
    protected $returnLineItems;
    protected $exchangeLineItems;
    protected $refundShipping;
    protected $refundDuties;
    protected $refundMethodAllocation;

    public function setReturnLineItems(array $returnLineItems)
    {
        $this->returnLineItems = $returnLineItems;

        return $this;
    }

    public function setExchangeLineItems(array $exchangeLineItems)
    {
        $this->exchangeLineItems = $exchangeLineItems;

        return $this;
    }

    public function setRefundShipping(RefundShippingInputInputObject $refundShippingInputInputObject)
    {
        $this->refundShipping = $refundShippingInputInputObject;

        return $this;
    }

    public function setRefundDuties(array $refundDuties)
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    public function setRefundMethodAllocation($refundMethodAllocation)
    {
        $this->refundMethodAllocation = new RawObject($refundMethodAllocation);

        return $this;
    }
}
