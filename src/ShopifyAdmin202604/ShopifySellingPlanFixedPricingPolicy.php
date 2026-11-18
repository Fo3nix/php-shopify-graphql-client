<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanPricingPolicyAdjustmentValueHydrator;
use Carbon\Carbon;

/**
 * Represents the pricing policy of a subscription or deferred purchase option selling plan.
 * The selling plan fixed pricing policy works with the billing and delivery policy
 * to determine the final price. Discounts are divided among fulfillments.
 * For example, a subscription with a $10 discount and two deliveries will have a $5
 * discount applied to each delivery.
 */
class ShopifySellingPlanFixedPricingPolicy implements ShopifySellingPlanPricingPolicyBase
{
    protected $adjustmentType;
    protected $adjustmentValue;
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
     * The date and time when the fixed selling plan pricing policy was created.
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            return $data;
        }
}
