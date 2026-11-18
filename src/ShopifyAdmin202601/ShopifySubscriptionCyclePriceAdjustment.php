<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanPricingPolicyAdjustmentValueHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

/**
 * Represents a Subscription Line Pricing Cycle Adjustment.
 */
class ShopifySubscriptionCyclePriceAdjustment
{
    protected $adjustmentType;
    protected $adjustmentValue;
    protected $afterCycle;
    protected $computedPrice;

    
    /**
     * Price adjustment type.
     *
     * @return string A ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject value
     */
    public function getAdjustmentType(): ?string
    {
        return $this->adjustmentType;
    }

    
    /**
     * Price adjustment value.
     *
     * @return ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue
     */
    public function getAdjustmentValue(): ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue|null
    {
        return $this->adjustmentValue;
    }

    
    /**
     * The number of cycles required before this pricing policy applies.
     *
     * @return int
     */
    public function getAfterCycle(): ?int
    {
        return $this->afterCycle;
    }

    
    /**
     * The computed price after the adjustments applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getComputedPrice(): ?ShopifyMoneyV2
    {
        return $this->computedPrice;
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
            if (isset($data['computedPrice']) && $data['computedPrice'] !== null) {
                $instance->computedPrice = ShopifyMoneyV2::fromArray($data['computedPrice']);
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
            if ($this->computedPrice !== null) {
                $data['computedPrice'] = $this->computedPrice->asArray();
            }
            return $data;
        }
}
