<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyReturnSuggestedFinancialOutcomeArgumentsObject extends ArgumentsObject
{
    protected $returnLineItems;
    protected $exchangeLineItems;
    protected $refundShipping;
    protected $tipLineId;
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

    public function setRefundShipping(ShopifyRefundShippingInputInputObject $shopifyRefundShippingInputInputObject)
    {
        $this->refundShipping = $shopifyRefundShippingInputInputObject;

        return $this;
    }

    public function setTipLineId($tipLineId)
    {
        $this->tipLineId = $tipLineId;

        return $this;
    }

    public function setRefundDuties(array $refundDuties)
    {
        $this->refundDuties = $refundDuties;

        return $this;
    }

    public function setRefundMethodAllocation($shopifyRefundMethodAllocation)
    {
        $this->refundMethodAllocation = new RawObject($shopifyRefundMethodAllocation);

        return $this;
    }
}
