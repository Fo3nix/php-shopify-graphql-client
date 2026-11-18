<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAppSubscriptionDiscountValueHydrator;

/**
 * Discount applied to the recurring pricing portion of a subscription.
 */
class ShopifyAppSubscriptionDiscount
{
    protected $durationLimitInIntervals;
    protected $priceAfterDiscount;
    protected $remainingDurationInIntervals;
    protected $value;

    
    /**
     * The total number of billing intervals to which the discount will be applied.
     * The discount will be applied to an indefinite number of billing intervals if this value is blank.
     *
     * @return int
     */
    public function getDurationLimitInIntervals(): ?int
    {
        return $this->durationLimitInIntervals;
    }

    
    /**
     * The price of the subscription after the discount is applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getPriceAfterDiscount(): ?ShopifyMoneyV2
    {
        return $this->priceAfterDiscount;
    }

    
    /**
     * The remaining number of billing intervals to which the discount will be applied.
     *
     * @return int
     */
    public function getRemainingDurationInIntervals(): ?int
    {
        return $this->remainingDurationInIntervals;
    }

    
    /**
     * The value of the discount applied every billing interval.
     *
     * @return ShopifyAppSubscriptionDiscountAmount|ShopifyAppSubscriptionDiscountPercentage
     */
    public function getValue(): ShopifyAppSubscriptionDiscountAmount|ShopifyAppSubscriptionDiscountPercentage|null
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['durationLimitInIntervals']) && $data['durationLimitInIntervals'] !== null) {
                $instance->durationLimitInIntervals = $data['durationLimitInIntervals'];
            }
            if (isset($data['priceAfterDiscount']) && $data['priceAfterDiscount'] !== null) {
                $instance->priceAfterDiscount = ShopifyMoneyV2::fromArray($data['priceAfterDiscount']);
            }
            if (isset($data['remainingDurationInIntervals']) && $data['remainingDurationInIntervals'] !== null) {
                $instance->remainingDurationInIntervals = $data['remainingDurationInIntervals'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyAppSubscriptionDiscountValueHydrator::fromArray($data['value']);
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
            if ($this->durationLimitInIntervals !== null) {
                $data['durationLimitInIntervals'] = $this->durationLimitInIntervals;
            }
            if ($this->priceAfterDiscount !== null) {
                $data['priceAfterDiscount'] = $this->priceAfterDiscount->asArray();
            }
            if ($this->remainingDurationInIntervals !== null) {
                $data['remainingDurationInIntervals'] = $this->remainingDurationInIntervals;
            }
            if ($this->value !== null) {
                $data['value'] = ShopifyAppSubscriptionDiscountValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
