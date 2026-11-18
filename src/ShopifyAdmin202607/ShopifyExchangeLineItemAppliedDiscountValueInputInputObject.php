<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input value for an applied discount on a calculated exchange line item.
 * Can either specify the value as a fixed amount or a percentage.
 */
class ShopifyExchangeLineItemAppliedDiscountValueInputInputObject extends InputObject
{
    protected $amount;
    protected $percentage;

    /**
     * The value of the discount as a fixed amount.
     */
    public function setAmount(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->amount = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The value of the discount as a percentage.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }
}
