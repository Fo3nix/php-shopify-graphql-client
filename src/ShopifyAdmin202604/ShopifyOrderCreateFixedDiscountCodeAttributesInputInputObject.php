<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a fixed amount discount code to apply to an order.
 */
class ShopifyOrderCreateFixedDiscountCodeAttributesInputInputObject extends InputObject
{
    const REQUIRED = ["code"];

    protected $code;
    protected $amountSet;

    /**
     * The discount code that was entered at checkout.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The amount that's deducted from the order total. When you create an order, this value is the monetary amount to deduct.
     */
    public function setAmountSet(ShopifyMoneyBagInputInputObject $shopifyMoneyBagInputInputObject): static
    {
        $this->amountSet = $shopifyMoneyBagInputInputObject;

        return $this;
    }
}
