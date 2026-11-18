<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * An activity on a cash drawer.
 */
class ShopifyCashActivityInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CashActivity";

    /**
     * The amount of cash added or removed as part of the activity.
     */
    public function selectCash(?ShopifyCashActivityCashArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The point of sale device payment session associated with the activity.
     */
    public function selectPaymentSession(?ShopifyCashActivityPaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("paymentSession");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who performed the activity.
     */
    public function selectStaffMember(?ShopifyCashActivityStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
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

    public function onCashAdjustmentActivity(): ShopifyCashAdjustmentActivityQueryObject
    {
        $object = new ShopifyCashAdjustmentActivityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashCountActivity(): ShopifyCashCountActivityQueryObject
    {
        $object = new ShopifyCashCountActivityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCashTransactionActivity(): ShopifyCashTransactionActivityQueryObject
    {
        $object = new ShopifyCashTransactionActivityQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
