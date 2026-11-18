<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Defines a quantity threshold for discount eligibility or application. This simple object specifies the number of items required to trigger or calculate discount benefits.
 *
 * For example, a "Buy 3, Get 1 Free" promotion would use DiscountQuantity to define the minimum purchase quantity of 3 items, or a bulk discount might specify quantity tiers like 10+ items for wholesale pricing.
 *
 * The quantity value determines how discounts interact with cart contents, whether setting minimum purchase requirements or defining quantity-based discount calculations.
 */
class ShopifyDiscountQuantity
{
    protected $quantity;

    
    /**
     * The quantity of items.
     *
     * @return string
     */
    public function getQuantity(): mixed
    {
        return $this->quantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
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
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            return $data;
        }
}
