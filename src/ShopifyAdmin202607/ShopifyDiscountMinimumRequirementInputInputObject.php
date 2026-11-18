<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the minimum quantity or subtotal required for a discount.
 */
class ShopifyDiscountMinimumRequirementInputInputObject extends InputObject
{
    protected $quantity;
    protected $subtotal;

    /**
     * The minimum required quantity.
     */
    public function setQuantity(ShopifyDiscountMinimumQuantityInputInputObject $shopifyDiscountMinimumQuantityInputInputObject): static
    {
        $this->quantity = $shopifyDiscountMinimumQuantityInputInputObject;

        return $this;
    }

    /**
     * The minimum required subtotal.
     */
    public function setSubtotal(ShopifyDiscountMinimumSubtotalInputInputObject $shopifyDiscountMinimumSubtotalInputInputObject): static
    {
        $this->subtotal = $shopifyDiscountMinimumSubtotalInputInputObject;

        return $this;
    }
}
