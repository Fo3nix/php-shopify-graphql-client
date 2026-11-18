<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a recurring selling plan pricing policy. It applies after the fixed pricing policy. By using the afterCycle parameter, you can specify the cycle when the recurring pricing policy comes into effect. Recurring pricing policies are not available for deferred purchase options.
 */
class ShopifySellingPlanRecurringPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringPricingPolicy";

    /**
     * The price adjustment type.
     */
    public function selectAdjustmentType(): static
    {
        $this->selectField("adjustmentType");

        return $this;
    }

    /**
     * The price adjustment value.
     */
    public function selectAdjustmentValue(?ShopifySellingPlanRecurringPricingPolicyAdjustmentValueArgumentsObject $argsObject = null): ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject
    {
        $object = new ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Cycle after which this pricing policy applies.
     */
    public function selectAfterCycle(): static
    {
        $this->selectField("afterCycle");

        return $this;
    }

    /**
     * The date and time when the recurring selling plan pricing policy was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }
}
