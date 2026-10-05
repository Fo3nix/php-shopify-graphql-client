<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

class ShopifyExchangeLineItemAppliedDiscountValueInputInputObject extends InputObject
{
    protected $amount;
    protected $percentage;

    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject)
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }
}
