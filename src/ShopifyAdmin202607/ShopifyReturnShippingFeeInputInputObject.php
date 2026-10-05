<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

class ShopifyReturnShippingFeeInputInputObject extends InputObject
{
    protected $amount;

    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject)
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }
}
