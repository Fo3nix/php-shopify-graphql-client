<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents selling plan pricing policy common fields.
 */
class ShopifySellingPlanPricingPolicyBaseInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "SellingPlanPricingPolicyBase";

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
    public function selectAdjustmentValue(?ShopifySellingPlanPricingPolicyBaseAdjustmentValueArgumentsObject $argsObject = null): ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject
    {
        $object = new ShopifySellingPlanPricingPolicyAdjustmentValueUnionObject("adjustmentValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onSellingPlanFixedPricingPolicy(): ShopifySellingPlanFixedPricingPolicyQueryObject
    {
        $object = new ShopifySellingPlanFixedPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanRecurringPricingPolicy(): ShopifySellingPlanRecurringPricingPolicyQueryObject
    {
        $object = new ShopifySellingPlanRecurringPricingPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
