<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppSubscriptionDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

class ShopifyAppRecurringPricing
{
    protected $discount;
    protected $interval;
    protected $planHandle;
    protected $price;

    
    /**
     * @return ShopifyAppSubscriptionDiscount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    
    /**
     * @return ShopifyAppPricingIntervalEnumObject
     */
    public function getInterval()
    {
        return $this->interval;
    }

    
    /**
     * @return string
     */
    public function getPlanHandle()
    {
        return $this->planHandle;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getPrice()
    {
        return $this->price;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discount']) && $data['discount'] !== null) {
                $instance->discount = ShopifyAppSubscriptionDiscount::fromArray($data['discount']);
            }
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['planHandle']) && $data['planHandle'] !== null) {
                $instance->planHandle = $data['planHandle'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
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
            if ($this->discount !== null) {
                $data['discount'] = $this->discount->asArray();
            }
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->planHandle !== null) {
                $data['planHandle'] = $this->planHandle;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            return $data;
        }
}
