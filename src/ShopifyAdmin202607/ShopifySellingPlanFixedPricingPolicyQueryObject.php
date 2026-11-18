<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the pricing policy of a subscription or deferred purchase option selling plan.
 * The selling plan fixed pricing policy works with the billing and delivery policy
 * to determine the final price. Discounts are divided among fulfillments.
 * For example, a subscription with a $10 discount and two deliveries will have a $5
 * discount applied to each delivery.
 */
class ShopifySellingPlanFixedPricingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedPricingPolicy";

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
    public function selectAdjustmentValue(?ShopifySellingPlanFixedPricingPolicyAdjustmentValueArgumentsObject $argsObject = null): ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject
    {
        $object = new ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the fixed selling plan pricing policy was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }
}
