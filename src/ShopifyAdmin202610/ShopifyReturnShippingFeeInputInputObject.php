<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return shipping fee.
 */
class ShopifyReturnShippingFeeInputInputObject extends InputObject
{
    const REQUIRED = ["amount"];

    protected $amount;

    /**
     * The value of the fee as a fixed amount in the presentment currency of the order.
     */
    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }
}
