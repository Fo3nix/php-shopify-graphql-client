<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentTermsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTerms";

    public function selectDraftOrder(ShopifyPaymentTermsDraftOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderQueryObject("draftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDue()
    {
        $this->selectField("due");

        return $this;
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

    public function selectOrder(ShopifyPaymentTermsOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
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

    public function selectPaymentSchedules(ShopifyPaymentTermsPaymentSchedulesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentScheduleConnectionQueryObject("paymentSchedules");
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
