<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
 * that you can use in combination with
 * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
 */
class ShopifyDiscountCombinesWith
{
    protected $orderDiscounts;
    protected $productDiscounts;
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
            if ($this->shippingDiscounts !== null) {
                $data['shippingDiscounts'] = $this->shippingDiscounts;
            }
            return $data;
        }
}
