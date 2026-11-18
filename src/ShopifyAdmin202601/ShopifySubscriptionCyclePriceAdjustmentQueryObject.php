<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Subscription Line Pricing Cycle Adjustment.
 */
class ShopifySubscriptionCyclePriceAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionCyclePriceAdjustment";

    /**
     * Price adjustment type.
     */
    public function selectAdjustmentType(): static
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    /**
     * Price adjustment value.
     */
    public function selectAdjustmentValue(?ShopifySubscriptionCyclePriceAdjustmentAdjustmentValueArgumentsObject $argsObject = null): ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject
    {
        $object = new ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of cycles required before this pricing policy applies.
     */
    public function selectAfterCycle(): static
    {
        $this->selectField("afterCycle");

        return $this;
    }

    /**
     * The computed price after the adjustments applied.
     */
    public function selectComputedPrice(?ShopifySubscriptionCyclePriceAdjustmentComputedPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("computedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
