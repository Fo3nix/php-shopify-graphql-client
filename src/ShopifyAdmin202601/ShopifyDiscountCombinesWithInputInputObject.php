<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to determine which discount classes the discount can combine with.
 */
class ShopifyDiscountCombinesWithInputInputObject extends InputObject
{
    protected $productDiscounts;
    protected $orderDiscounts;
    protected $shippingDiscounts;

    /**
     * Whether the discount combines with the
     * [product discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    public function setProductDiscounts($productDiscounts): static
    {
        $this->productDiscounts = $productDiscounts;

        return $this;
    }

    /**
     * Whether the discount combines with the
     * [order discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    public function setOrderDiscounts($orderDiscounts): static
    {
        $this->orderDiscounts = $orderDiscounts;

        return $this;
    }

    /**
     * Whether the discount combines
     * with the
     * [shipping discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     */
    public function setShippingDiscounts($shippingDiscounts): static
    {
        $this->shippingDiscounts = $shippingDiscounts;

        return $this;
    }
}
