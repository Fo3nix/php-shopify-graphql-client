<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the quantity of items discounted and the discount value.
 */
class ShopifyDiscountCustomerGetsValueInputInputObject extends InputObject
{
    protected $discountOnQuantity;
    protected $percentage;
    protected $discountAmount;

    /**
     * The quantity of the items that are discounted and the discount value.
     */
    public function setDiscountOnQuantity(ShopifyDiscountOnQuantityInputInputObject $shopifyDiscountOnQuantityInputInputObject): static
    {
        $this->discountOnQuantity = $shopifyDiscountOnQuantityInputInputObject;

        return $this;
    }

    /**
     * The percentage value of the discount. Value must be between 0.00 - 1.00.
     *
     * Note: BXGY doesn't support percentage.
     */
    public function setPercentage($percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * The value of the discount.
     *
     * Note: BXGY doesn't support discountAmount.
     */
    public function setDiscountAmount(ShopifyDiscountAmountInputInputObject $shopifyDiscountAmountInputInputObject): static
    {
        $this->discountAmount = $shopifyDiscountAmountInputInputObject;

        return $this;
    }
}
