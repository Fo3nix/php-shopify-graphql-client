<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanFixedBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedBillingPolicy";

    public function selectCheckoutCharge(SellingPlanFixedBillingPolicyCheckoutChargeArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanCheckoutChargeQueryObject("checkoutCharge");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRemainingBalanceChargeExactTime()
    {
        $this->selectField("remainingBalanceChargeExactTime");

        return $this;
    }

    public function selectRemainingBalanceChargeTimeAfterCheckout()
    {
        $this->selectField("remainingBalanceChargeTimeAfterCheckout");

        return $this;
    }

    public function selectRemainingBalanceChargeTrigger()
    {
        $this->selectField("remainingBalanceChargeTrigger");

        return $this;
    }
}
