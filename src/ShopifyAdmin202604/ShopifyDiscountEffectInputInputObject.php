<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for how the discount will be applied. Currently, only percentage off is supported.
 */
class ShopifyDiscountEffectInputInputObject extends InputObject
{
    protected $percentage;
    protected $amount;

    /**
     * The percentage value of the discount. Value must be between 0.00 - 1.00.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * The value of the discount.
     */
    public function setAmount($amount): static
    {
        $this->amount = $amount;

        return $this;
    }
}
