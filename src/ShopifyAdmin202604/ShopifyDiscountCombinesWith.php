<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
 * that you can use in combination with
 * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
 */
class ShopifyDiscountCombinesWith
{
    protected $orderDiscounts;
    protected $productDiscounts;
    protected $productDiscountsWithTagsOnSameCartLine;
    protected $shippingDiscounts;

    
    /**
     * Whether the discount combines with the
     * [order discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     *
     * @return bool
     */
    public function getOrderDiscounts(): ?bool
    {
        return $this->orderDiscounts;
    }

    
    /**
     * Whether the discount combines with the
     * [product discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     *
     * @return bool
     */
    public function getProductDiscounts(): ?bool
    {
        return $this->productDiscounts;
    }

    
    /**
     * Controls which product discounts can apply together on the same cart line. By
     * default, only one product discount applies per line. Available only on a Shopify
     * Plus plan and requires the `productDiscounts` field to be set to `true`.
     *
     * For discounts to apply together, they must match tags in both directions. Each
     * discount has two tag sets: the tags that identify the discount, and the tags that
     * it agrees to apply with. Use the `tags` field on the discount input to set the
     * discount's own tags. This field returns the tags that this discount agrees to
     * apply with. Two discounts apply together only if each one allows at least one tag
     * that the other is tagged with. Any number of product discounts can apply to the
     * same line if this two-way match holds for every pair in the group.
     *
     * Example: Discount A is tagged with `LOYALTY` and allows `SEASONAL`, and Discount B
     * is tagged with `SEASONAL` and allows `LOYALTY`. They apply together. To add a
     * third discount, it must meet the same mutual-match rule with both A and B.
     *
     * Buy X Get Y discounts stack only on the customer-gets products (GY), not the
     * customer-buys products (BX). See
     * [Limitations for discount combinations](https://help.shopify.com/manual/discounts/discount-combinations#considerations)
     * for details.
     *
     * @return string[]
     */
    public function getProductDiscountsWithTagsOnSameCartLine(): ?array
    {
        return $this->productDiscountsWithTagsOnSameCartLine;
    }

    
    /**
     * Whether the discount combines with the
     * [shipping discount](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * class.
     *
     * @return bool
     */
    public function getShippingDiscounts(): ?bool
    {
        return $this->shippingDiscounts;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['orderDiscounts']) && $data['orderDiscounts'] !== null) {
                $instance->orderDiscounts = $data['orderDiscounts'];
            }
            if (isset($data['productDiscounts']) && $data['productDiscounts'] !== null) {
                $instance->productDiscounts = $data['productDiscounts'];
            }
            if (isset($data['productDiscountsWithTagsOnSameCartLine']) && $data['productDiscountsWithTagsOnSameCartLine'] !== null) {
                $instance->productDiscountsWithTagsOnSameCartLine = $data['productDiscountsWithTagsOnSameCartLine'];
            }
            if (isset($data['shippingDiscounts']) && $data['shippingDiscounts'] !== null) {
                $instance->shippingDiscounts = $data['shippingDiscounts'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->orderDiscounts !== null) {
                $data['orderDiscounts'] = $this->orderDiscounts;
            }
            if ($this->productDiscounts !== null) {
                $data['productDiscounts'] = $this->productDiscounts;
            }
            if ($this->productDiscountsWithTagsOnSameCartLine !== null) {
                $data['productDiscountsWithTagsOnSameCartLine'] = $this->productDiscountsWithTagsOnSameCartLine;
            }
            if ($this->shippingDiscounts !== null) {
                $data['shippingDiscounts'] = $this->shippingDiscounts;
            }
            return $data;
        }
}
