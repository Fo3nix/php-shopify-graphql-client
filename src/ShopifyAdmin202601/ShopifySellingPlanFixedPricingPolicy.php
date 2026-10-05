<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanPricingPolicyAdjustmentValue;
use Carbon\Carbon;

class ShopifySellingPlanFixedPricingPolicy
{
    protected $adjustmentType;
    protected $adjustmentValue;
    protected $createdAt;

    
    /**
     * @return ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject
     */
    public function getAdjustmentType()
    {
        return $this->adjustmentType;
    }

    
    /**
     * @return ShopifySellingPlanPricingPolicyAdjustmentValue
     */
    public function getAdjustmentValue()
    {
        return $this->adjustmentValue;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustmentType']) && $data['adjustmentType'] !== null) {
                $instance->adjustmentType = $data['adjustmentType'];
            }
            if (isset($data['adjustmentValue']) && $data['adjustmentValue'] !== null) {
                $instance->adjustmentValue = ShopifySellingPlanPricingPolicyAdjustmentValue::fromArray($data['adjustmentValue']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
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
            if ($this->adjustmentType !== null) {
                $data['adjustmentType'] = $this->adjustmentType;
            }
            if ($this->adjustmentValue !== null) {
                $data['adjustmentValue'] = $this->adjustmentValue->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            return $data;
        }
}
