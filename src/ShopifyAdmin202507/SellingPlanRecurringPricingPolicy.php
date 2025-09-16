<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanPricingPolicyAdjustmentValue;
use Carbon\Carbon;

class SellingPlanRecurringPricingPolicy
{
    protected $adjustmentType;
    protected $adjustmentValue;
    protected $afterCycle;
    protected $createdAt;

    
    /**
     * @return SellingPlanPricingPolicyAdjustmentTypeEnumObject
     */
    public function getAdjustmentType()
    {
        return $this->adjustmentType;
    }

    
    /**
     * @return SellingPlanPricingPolicyAdjustmentValue
     */
    public function getAdjustmentValue()
    {
        return $this->adjustmentValue;
    }

    
    /**
     * @return int
     */
    public function getAfterCycle()
    {
        return $this->afterCycle;
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
                $instance->adjustmentValue = SellingPlanPricingPolicyAdjustmentValue::fromArray($data['adjustmentValue']);
            }
            if (isset($data['afterCycle']) && $data['afterCycle'] !== null) {
                $instance->afterCycle = $data['afterCycle'];
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
            if ($this->afterCycle !== null) {
                $data['afterCycle'] = $this->afterCycle;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            return $data;
        }
}
