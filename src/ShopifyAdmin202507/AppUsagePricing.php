<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class AppUsagePricing
{
    protected $balanceUsed;
    protected $cappedAmount;
    protected $interval;
    protected $terms;

    
    /**
     * @return MoneyV2
     */
    public function getBalanceUsed()
    {
        return $this->balanceUsed;
    }

    
    /**
     * @return MoneyV2
     */
    public function getCappedAmount()
    {
        return $this->cappedAmount;
    }

    
    /**
     * @return AppPricingIntervalEnumObject
     */
    public function getInterval()
    {
        return $this->interval;
    }

    
    /**
     * @return string
     */
    public function getTerms()
    {
        return $this->terms;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balanceUsed']) && $data['balanceUsed'] !== null) {
                $instance->balanceUsed = MoneyV2::fromArray($data['balanceUsed']);
            }
            if (isset($data['cappedAmount']) && $data['cappedAmount'] !== null) {
                $instance->cappedAmount = MoneyV2::fromArray($data['cappedAmount']);
            }
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['terms']) && $data['terms'] !== null) {
                $instance->terms = $data['terms'];
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
            if ($this->balanceUsed !== null) {
                $data['balanceUsed'] = $this->balanceUsed->asArray();
            }
            if ($this->cappedAmount !== null) {
                $data['cappedAmount'] = $this->cappedAmount->asArray();
            }
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->terms !== null) {
                $data['terms'] = $this->terms;
            }
            return $data;
        }
}
