<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountEffectHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountQuantity;

/**
 * Defines quantity-based discount rules that specify how many items are eligible for a discount effect. This object enables bulk purchase incentives and tiered pricing strategies.
 *
 * For example, a "Buy 4 candles, get 2 candles 50% off (mix and match)" promotion would specify a quantity threshold of 2 items that will receive a percentage discount effect, encouraging customers to purchase more items to unlock savings.
 *
 * The configuration combines quantity requirements with discount effects, allowing merchants to create sophisticated pricing rules that reward larger purchases and increase average order values.
 */
class ShopifyDiscountOnQuantity
{
    protected $effect;
    protected $quantity;

    
    /**
     * The discount's effect on qualifying items.
     *
     * @return ShopifyDiscountAmount|ShopifyDiscountPercentage
     */
    public function getEffect(): ShopifyDiscountAmount|ShopifyDiscountPercentage|null
    {
        return $this->effect;
    }

    
    /**
     * The number of items being discounted. The customer must have at least this many items of specified products or product variants in their order to be eligible for the discount.
     *
     * @return ShopifyDiscountQuantity
     */
    public function getQuantity(): ?ShopifyDiscountQuantity
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
            if (isset($data['effect']) && $data['effect'] !== null) {
                $instance->effect = ShopifyDiscountEffectHydrator::fromArray($data['effect']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = ShopifyDiscountQuantity::fromArray($data['quantity']);
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
            if ($this->effect !== null) {
                $data['effect'] = ShopifyDiscountEffectHydrator::toArray($this->effect);
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity->asArray();
            }
            return $data;
        }
}
