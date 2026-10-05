<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountEffect;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountQuantity;

class ShopifyDiscountOnQuantity
{
    protected $effect;
    protected $quantity;

    
    /**
     * @return ShopifyDiscountEffect
     */
    public function getEffect()
    {
        return $this->effect;
    }

    
    /**
     * @return ShopifyDiscountQuantity
     */
    public function getQuantity()
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
                $instance->effect = ShopifyDiscountEffect::fromArray($data['effect']);
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
                $data['effect'] = $this->effect->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity->asArray();
            }
            return $data;
        }
}
