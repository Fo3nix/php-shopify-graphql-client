<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fixed selling plan billing policy defines how much of the price of the product will be billed to customer
 * at checkout. If there is an outstanding balance, it determines when it will be paid.
 */
class ShopifySellingPlanFixedBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedBillingPolicy";

    /**
     * The checkout charge when the full amount isn't charged at checkout.
     */
    public function selectCheckoutCharge(?ShopifySellingPlanFixedBillingPolicyCheckoutChargeArgumentsObject $argsObject = null): ShopifySellingPlanCheckoutChargeQueryObject
    {
        $object = new ShopifySellingPlanCheckoutChargeQueryObject("checkoutCharge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The exact time when to capture the full payment.
     */
    public function selectRemainingBalanceChargeExactTime(): static
    {
        $this->selectField("remainingBalanceChargeExactTime");

        return $this;
    }

    /**
     * The period after remaining_balance_charge_trigger, before capturing the full payment. Expressed as an ISO8601 duration.
     */
    public function selectRemainingBalanceChargeTimeAfterCheckout(): static
    {
        $this->selectField("remainingBalanceChargeTimeAfterCheckout");

        return $this;
    }

    /**
     * When to capture payment for amount due.
     */
    public function selectRemainingBalanceChargeTrigger(): static
    {
        $this->selectField("remainingBalanceChargeTrigger");

        return $this;
    }
}
