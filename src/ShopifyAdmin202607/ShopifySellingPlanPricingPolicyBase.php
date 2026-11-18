<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySellingPlanPricingPolicyAdjustmentValueHydrator;

/**
 * Represents selling plan pricing policy common fields.
 */
interface ShopifySellingPlanPricingPolicyBase
{
    
    /**
     * The price adjustment type.
     *
     * @return string A ShopifySellingPlanPricingPolicyAdjustmentTypeEnumObject value
     */
    public function getAdjustmentType(): ?string;

    
    /**
     * The price adjustment value.
     *
     * @return ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue
     */
    public function getAdjustmentValue(): ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue|null;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
