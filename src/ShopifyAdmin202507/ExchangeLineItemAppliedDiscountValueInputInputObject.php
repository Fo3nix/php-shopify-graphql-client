<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class ExchangeLineItemAppliedDiscountValueInputInputObject extends InputObject
{
    protected $amount;
    protected $percentage;

    public function setAmount(MoneyInputInputObject $moneyInputInputObject)
    {
        $this->amount = $moneyInputInputObject;

        return $this;
    }

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }
}
