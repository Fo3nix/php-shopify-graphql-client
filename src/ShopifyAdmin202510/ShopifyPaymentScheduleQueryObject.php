<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentSchedule";

    /**
     * @deprecated Use `balanceDue`, `totalBalance`, or `Order.totalOutstandingSet` instead.
     */
    public function selectAmount(ShopifyPaymentScheduleAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBalanceDue(ShopifyPaymentScheduleBalanceDueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("balanceDue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCompletedAt()
    {
        $this->selectField("completedAt");

        return $this;
    }

    public function selectDue()
    {
        $this->selectField("due");

        return $this;
    }

    public function selectDueAt()
    {
        $this->selectField("dueAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIssuedAt()
    {
        $this->selectField("issuedAt");

        return $this;
    }

    public function selectPaymentTerms(ShopifyPaymentSchedulePaymentTermsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalBalance(ShopifyPaymentScheduleTotalBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
