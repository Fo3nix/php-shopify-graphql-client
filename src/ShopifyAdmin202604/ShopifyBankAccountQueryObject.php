<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyBankAccountQueryObject extends QueryObject
{
    const OBJECT_NAME = "BankAccount";

    public function selectAccountHolderType()
    {
        $this->selectField("accountHolderType");

        return $this;
    }

    public function selectAccountType()
    {
        $this->selectField("accountType");

        return $this;
    }

    public function selectBankName()
    {
        $this->selectField("bankName");

        return $this;
    }

    public function selectBillingAddress(ShopifyBankAccountBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentInstrumentBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastDigits()
    {
        $this->selectField("lastDigits");

        return $this;
    }
}
