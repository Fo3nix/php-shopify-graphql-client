<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A cash adjustment activity.
 */
class ShopifyCashAdjustmentActivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashAdjustmentActivity";

    /**
     * The amount of cash added or removed as part of the activity.
     */
    public function selectCash(?ShopifyCashAdjustmentActivityCashArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The gift card associated with the activity.
     */
    public function selectGiftCard(?ShopifyCashAdjustmentActivityGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A note associated with the activity.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The point of sale device payment session associated with the activity.
     */
    public function selectPaymentSession(?ShopifyCashAdjustmentActivityPaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("paymentSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The reason code for the activity.
     */
    public function selectReasonCode(?ShopifyCashAdjustmentActivityReasonCodeArgumentsObject $argsObject = null): ShopifyCashManagementReasonCodeUnionObject
    {
        $object = new ShopifyCashManagementReasonCodeUnionObject("reasonCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who performed the activity.
     */
    public function selectStaffMember(?ShopifyCashAdjustmentActivityStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The time at which the activity occurred.
     */
    public function selectTime(): static
    {
        $this->selectField("time");

        return $this;
    }

    /**
     * The type of adjustment activity.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
