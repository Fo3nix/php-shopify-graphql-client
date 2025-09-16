<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBankAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBankAccount";

    public function selectAccountNumberLastDigits()
    {
        $this->selectField("accountNumberLastDigits");

        return $this;
    }

    public function selectBankName()
    {
        $this->selectField("bankName");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPayouts(ShopifyPaymentsBankAccountPayoutsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsPayoutConnectionQueryObject("payouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
