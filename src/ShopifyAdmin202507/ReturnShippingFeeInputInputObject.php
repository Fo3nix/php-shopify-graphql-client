<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class ReturnShippingFeeInputInputObject extends InputObject
{
    protected $amount;

    public function setAmount(MoneyInputInputObject $moneyInputInputObject)
    {
        $this->amount = $moneyInputInputObject;

        return $this;
    }
}
