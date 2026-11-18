<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A cash transaction activity.
 */
class ShopifyCashTransactionActivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTransactionActivity";

    /**
     * The amount of cash added or removed as part of the activity.
     */
    public function selectCash(?ShopifyCashTransactionActivityCashArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order transaction associated with the activity.
     */
    public function selectOrderTransaction(?ShopifyCashTransactionActivityOrderTransactionArgumentsObject $argsObject = null): ShopifyOrderTransactionQueryObject
    {
        $object = new ShopifyOrderTransactionQueryObject("orderTransaction");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The point of sale device payment session associated with the activity.
     */
    public function selectPaymentSession(?ShopifyCashTransactionActivityPaymentSessionArgumentsObject $argsObject = null): ShopifyPointOfSaleDevicePaymentSessionQueryObject
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
    public function selectStaffMember(?ShopifyCashTransactionActivityStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
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
     * The type of transaction activity.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
