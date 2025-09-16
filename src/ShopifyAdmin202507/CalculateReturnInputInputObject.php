<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class CalculateReturnInputInputObject extends InputObject
{
    protected $orderId;
    protected $returnLineItems;
    protected $exchangeLineItems;
    protected $returnShippingFee;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

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

    public function setReturnShippingFee(ReturnShippingFeeInputInputObject $returnShippingFeeInputInputObject)
    {
        $this->returnShippingFee = $returnShippingFeeInputInputObject;

        return $this;
    }
}
