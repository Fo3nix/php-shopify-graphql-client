<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a percentage discount code to apply to an order.
 */
class ShopifyOrderCreatePercentageDiscountCodeAttributesInputInputObject extends InputObject
{
    const REQUIRED = ["code"];

    protected $code;
    protected $percentage;

    /**
     * The discount code that was entered at checkout.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The amount that's deducted from the order total. When you create an order, this value is the percentage to deduct.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }
}
