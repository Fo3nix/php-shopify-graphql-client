<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsBankAccountQueryObject extends QueryObject
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

    public function selectPayouts(ShopifyShopifyPaymentsBankAccountPayoutsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsPayoutConnectionQueryObject("payouts");
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
