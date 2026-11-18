<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to specify the value discounted every billing interval.
 */
class ShopifyAppSubscriptionDiscountValueInputInputObject extends InputObject
{
    protected $percentage;
    protected $amount;

    /**
     * The percentage value of a discount.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * The monetary value of a discount.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }
}
