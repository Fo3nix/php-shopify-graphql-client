<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMoneyBag;

class ShopifyDiscountAllocation
{
    protected $allocatedAmount;
    protected $allocatedAmountSet;
    protected $discountApplication;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAllocatedAmount()
    {
        return $this->allocatedAmount;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getAllocatedAmountSet()
    {
        return $this->allocatedAmountSet;
    }

    
    /**
     * @return mixed
     */
    public function getDiscountApplication()
    {
        return $this->discountApplication;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['allocatedAmount']) && $data['allocatedAmount'] !== null) {
                $instance->allocatedAmount = ShopifyMoneyV2::fromArray($data['allocatedAmount']);
            }
            if (isset($data['allocatedAmountSet']) && $data['allocatedAmountSet'] !== null) {
                $instance->allocatedAmountSet = ShopifyMoneyBag::fromArray($data['allocatedAmountSet']);
            }
            if (isset($data['discountApplication']) && $data['discountApplication'] !== null) {
                $instance->discountApplication = $data['discountApplication'];
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
            if ($this->allocatedAmount !== null) {
                $data['allocatedAmount'] = $this->allocatedAmount->asArray();
            }
            if ($this->allocatedAmountSet !== null) {
                $data['allocatedAmountSet'] = $this->allocatedAmountSet->asArray();
            }
            if ($this->discountApplication !== null) {
                $data['discountApplication'] = $this->discountApplication;
            }
            return $data;
        }
}
