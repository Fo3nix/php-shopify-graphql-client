<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A cash count activity.
 */
class ShopifyCashCountActivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashCountActivity";

    /**
     * The amount of cash added or removed as part of the activity.
     */
    public function selectCash(?ShopifyCashCountActivityCashArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of cash counted during the activity.
     */
    public function selectCashCounted(?ShopifyCashCountActivityCashCountedArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashCounted");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discrepancy between the counted and expected cash amounts.
     */
    public function selectCashDiscrepancy(?ShopifyCashCountActivityCashDiscrepancyArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashDiscrepancy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The expected amount of cash in the drawer at the time of the activity.
     */
    public function selectCashExpected(?ShopifyCashCountActivityCashExpectedArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashExpected");
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
    public function selectPaymentSession(?ShopifyCashCountActivityPaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
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
    public function selectReasonCode(?ShopifyCashCountActivityReasonCodeArgumentsObject $argsObject = null): ShopifyCashManagementReasonCodeUnionObject
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
    public function selectStaffMember(?ShopifyCashCountActivityStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
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
     * The type of count activity.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
