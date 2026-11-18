<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySubscriptionDiscountHydrator;

/**
 * Represents what a particular discount reduces from a line price.
 */
class ShopifySubscriptionDiscountAllocation
{
    protected $amount;
    protected $discount;

    
    /**
     * Allocation amount.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * Discount that created the allocation.
     *
     * @return ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount
     */
    public function getDiscount(): ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount|null
    {
        return $this->discount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['discount']) && $data['discount'] !== null) {
                $instance->discount = ShopifySubscriptionDiscountHydrator::fromArray($data['discount']);
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->discount !== null) {
                $data['discount'] = ShopifySubscriptionDiscountHydrator::toArray($this->discount);
            }
            return $data;
        }
}
