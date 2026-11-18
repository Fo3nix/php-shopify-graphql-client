<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the quantity of items discounted and the discount value.
 */
class ShopifyDiscountOnQuantityInputInputObject extends InputObject
{
    protected $quantity;
    protected $effect;

    /**
     * The quantity of items that are discounted.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The percentage value of the discount.
     */
    public function setEffect(ShopifyDiscountEffectInputInputObject $shopifyDiscountEffectInputInputObject): static
    {
        $this->effect = $shopifyDiscountEffectInputInputObject;

        return $this;
    }
}
