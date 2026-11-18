<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the payment schedule for a single payment defined in the payment terms.
 */
class ShopifyPaymentScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentSchedule";

    /**
     * Amount owed for this payment schedule.
     *
     * @deprecated Use `balanceDue`, `totalBalance`, or `Order.totalOutstandingSet` instead.
     */
    public function selectAmount(?ShopifyPaymentScheduleAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Remaining balance to be captured for this payment schedule.
     */
    public function selectBalanceDue(?ShopifyPaymentScheduleBalanceDueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balanceDue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Date and time when the payment schedule is paid or fulfilled.
     */
    public function selectCompletedAt(): static
    {
        $this->selectField("completedAt");

        return $this;
    }

    /**
     * Whether the payment schedule is due.
     */
    public function selectDue(): static
    {
        $this->selectField("due");

        return $this;
    }

    /**
     * Date and time when the payment schedule is due.
     */
    public function selectDueAt(): static
    {
        $this->selectField("dueAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Date and time when the invoice is sent.
     */
    public function selectIssuedAt(): static
    {
        $this->selectField("issuedAt");

        return $this;
    }

    /**
     * The payment terms the payment schedule belongs to.
     */
    public function selectPaymentTerms(?ShopifyPaymentSchedulePaymentTermsArgumentsObject $argsObject = null): ShopifyPaymentTermsQueryObject
    {
        $object = new ShopifyPaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Remaining balance to be paid or authorized by the customer for this payment schedule.
     */
    public function selectTotalBalance(?ShopifyPaymentScheduleTotalBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
