<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppSubscriptionDiscountValue;

class AppSubscriptionDiscount
{
    protected $durationLimitInIntervals;
    protected $priceAfterDiscount;
    protected $remainingDurationInIntervals;
    protected $value;

    
    /**
     * @return int
     */
    public function getDurationLimitInIntervals()
    {
        return $this->durationLimitInIntervals;
    }

    
    /**
     * @return MoneyV2
     */
    public function getPriceAfterDiscount()
    {
        return $this->priceAfterDiscount;
    }

    
    /**
     * @return int
     */
    public function getRemainingDurationInIntervals()
    {
        return $this->remainingDurationInIntervals;
    }

    
    /**
     * @return AppSubscriptionDiscountValue
     */
    public function getValue()
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
                $instance->priceAfterDiscount = MoneyV2::fromArray($data['priceAfterDiscount']);
            }
            if (isset($data['remainingDurationInIntervals']) && $data['remainingDurationInIntervals'] !== null) {
                $instance->remainingDurationInIntervals = $data['remainingDurationInIntervals'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = AppSubscriptionDiscountValue::fromArray($data['value']);
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
                $data['value'] = $this->value->asArray();
            }
            return $data;
        }
}
