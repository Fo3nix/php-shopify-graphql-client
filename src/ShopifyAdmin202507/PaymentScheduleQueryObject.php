<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentSchedule";

    /**
     * @deprecated Use `balanceDue`, `totalBalance`, or `Order.totalOutstandingSet` instead.
     */
    public function selectAmount(PaymentScheduleAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
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

    public function selectPaymentTerms(PaymentSchedulePaymentTermsArgumentsObject $argsObject = null)
    {
        $object = new PaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
