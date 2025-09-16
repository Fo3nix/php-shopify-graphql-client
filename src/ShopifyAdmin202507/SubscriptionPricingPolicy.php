<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionCyclePriceAdjustment;

class SubscriptionPricingPolicy
{
    protected $basePrice;
    protected $cycleDiscounts;

    
    /**
     * @return MoneyV2
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    
    /**
     * @return SubscriptionCyclePriceAdjustment[]
     */
    public function getCycleDiscounts()
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
                $instance->basePrice = MoneyV2::fromArray($data['basePrice']);
            }
            if (isset($data['cycleDiscounts']) && $data['cycleDiscounts'] !== null) {
                $instance->cycleDiscounts = array_map(function($item) { return SubscriptionCyclePriceAdjustment::fromArray($item); }, $data['cycleDiscounts']);
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
