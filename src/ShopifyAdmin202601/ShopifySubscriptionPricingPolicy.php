<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionCyclePriceAdjustment;

/**
 * Represents a Subscription Line Pricing Policy.
 */
class ShopifySubscriptionPricingPolicy
{
    protected $basePrice;
    protected $cycleDiscounts;

    
    /**
     * The base price per unit for the subscription line in the contract's currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getBasePrice(): ?ShopifyMoneyV2
    {
        return $this->basePrice;
    }

    
    /**
     * The adjustments per cycle for the subscription line.
     *
     * @return ShopifySubscriptionCyclePriceAdjustment[]
     */
    public function getCycleDiscounts(): ?array
    {
        return $this->cycleDiscounts;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['basePrice']) && $data['basePrice'] !== null) {
                $instance->basePrice = ShopifyMoneyV2::fromArray($data['basePrice']);
            }
            if (isset($data['cycleDiscounts']) && $data['cycleDiscounts'] !== null) {
                $instance->cycleDiscounts = array_map(function($item) { return ShopifySubscriptionCyclePriceAdjustment::fromArray($item); }, $data['cycleDiscounts']);
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
            if ($this->basePrice !== null) {
                $data['basePrice'] = $this->basePrice->asArray();
            }
            if ($this->cycleDiscounts !== null) {
                $data['cycleDiscounts'] = array_map(function($item) { return $item->asArray(); }, $this->cycleDiscounts);
            }
            return $data;
        }
}
