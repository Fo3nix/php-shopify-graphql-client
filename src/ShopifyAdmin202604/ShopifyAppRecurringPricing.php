<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppSubscriptionDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

/**
 * The pricing information about a subscription app.
 * The object contains an interval (the frequency at which the shop is billed for an app subscription) and
 * a price (the amount to be charged to the subscribing shop at each interval).
 */
class ShopifyAppRecurringPricing
{
    protected $discount;
    protected $interval;
    protected $planHandle;
    protected $price;

    
    /**
     * The discount applied to the subscription for a given number of billing intervals.
     *
     * @return ShopifyAppSubscriptionDiscount
     */
    public function getDiscount(): ?ShopifyAppSubscriptionDiscount
    {
        return $this->discount;
    }

    
    /**
     * The frequency at which the subscribing shop is billed for an app subscription.
     *
     * @return string A ShopifyAppPricingIntervalEnumObject value
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    
    /**
     * The app store pricing plan handle.
     *
     * @return string
     */
    public function getPlanHandle(): ?string
    {
        return $this->planHandle;
    }

    
    /**
     * The amount and currency to be charged to the subscribing shop every billing interval.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
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
