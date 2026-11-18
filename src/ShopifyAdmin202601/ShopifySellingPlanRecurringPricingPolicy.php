<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanPricingPolicyAdjustmentValueHydrator;
use Carbon\Carbon;

/**
 * Represents a recurring selling plan pricing policy. It applies after the fixed pricing policy. By using the afterCycle parameter, you can specify the cycle when the recurring pricing policy comes into effect. Recurring pricing policies are not available for deferred purchase options.
 */
class ShopifySellingPlanRecurringPricingPolicy implements ShopifySellingPlanPricingPolicyBase
{
    protected $adjustmentType;
    protected $adjustmentValue;
    protected $afterCycle;
    protected $createdAt;

    
    /**
     * The price adjustment type.
     *
     * @return string A ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject value
     */
    public function getAdjustmentType(): ?string
    {
        return $this->adjustmentType;
    }

    
    /**
     * The price adjustment value.
     *
     * @return ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue
     */
    public function getAdjustmentValue(): ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue|null
    {
        return $this->adjustmentValue;
    }

    
    /**
     * Cycle after which this pricing policy applies.
     *
     * @return int
     */
    public function getAfterCycle(): ?int
    {
        return $this->afterCycle;
    }

    
    /**
     * The date and time when the recurring selling plan pricing policy was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
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
                $instance->adjustmentValue = ShopifySellingPlanPricingPolicyAdjustmentValueHydrator::fromArray($data['adjustmentValue']);
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
                $data['adjustmentValue'] = ShopifySellingPlanPricingPolicyAdjustmentValueHydrator::toArray($this->adjustmentValue);
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
