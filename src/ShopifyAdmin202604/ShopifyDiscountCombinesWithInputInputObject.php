<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to determine which discount classes the discount can combine with.
 */
class ShopifyDiscountCombinesWithInputInputObject extends InputObject
{
    protected $productDiscounts;
    protected $orderDiscounts;
    protected $shippingDiscounts;
    protected $productDiscountsWithTagsOnSameCartLine;

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

    /**
     * Controls which product discounts can apply together on the same cart line. By
     * default, only one product discount applies per line. Available only on a Shopify
     * Plus plan and requires the `productDiscounts` field to be set to `true`.
     *
     * For discounts to apply together, they must match tags in both directions. Each
     * discount has two tag sets: the tags that identify the discount, and the tags that
     * it agrees to apply with. Use the `tags` field on the discount input to set the
     * discount's own tags. Use this field to set the tags that the discount can apply
     * with. Two discounts apply together only if each one allows at least one tag that
     * the other is tagged with. Any number of product discounts can apply to the same
     * line if this two-way match holds for every pair in the group.
     *
     * Example: Discount A is tagged with `LOYALTY` and allows `SEASONAL`, and Discount B
     * is tagged with `SEASONAL` and allows `LOYALTY`. They apply together. To add a
     * third discount, it must meet the same mutual-match rule with both A and B.
     *
     * Buy X Get Y discounts stack only on the customer-gets products (GY), not the
     * customer-buys products (BX). See
     * [Limitations for discount combinations](https://help.shopify.com/manual/discounts/discount-combinations#considerations)
     * for details.
     */
    public function setProductDiscountsWithTagsOnSameCartLine(ShopifyProductDiscountsWithTagsOnSameCartLineInputInputObject $shopifyProductDiscountsWithTagsOnSameCartLineInputInputObject): static
    {
        $this->productDiscountsWithTagsOnSameCartLine = $shopifyProductDiscountsWithTagsOnSameCartLineInputInputObject;

        return $this;
    }
}
