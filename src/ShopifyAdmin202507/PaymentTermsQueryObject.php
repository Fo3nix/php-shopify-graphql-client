<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentTermsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTerms";

    public function selectDraftOrder(PaymentTermsDraftOrderArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderQueryObject("draftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDueInDays()
    {
        $this->selectField("dueInDays");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOrder(PaymentTermsOrderArgumentsObject $argsObject = null)
    {
        $object = new OrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOverdue()
    {
        $this->selectField("overdue");

        return $this;
    }

    public function selectPaymentSchedules(PaymentTermsPaymentSchedulesArgumentsObject $argsObject = null)
    {
        $object = new PaymentScheduleConnectionQueryObject("paymentSchedules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPaymentTermsName()
    {
        $this->selectField("paymentTermsName");

        return $this;
    }

    public function selectPaymentTermsType()
    {
        $this->selectField("paymentTermsType");

        return $this;
    }

    public function selectTranslatedName()
    {
        $this->selectField("translatedName");

        return $this;
    }
}
