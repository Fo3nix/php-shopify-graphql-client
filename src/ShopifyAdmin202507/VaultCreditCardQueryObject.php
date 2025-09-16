<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class VaultCreditCardQueryObject extends QueryObject
{
    const OBJECT_NAME = "VaultCreditCard";

    public function selectBillingAddress(VaultCreditCardBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new CustomerCreditCardBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBrand()
    {
        $this->selectField("brand");

        return $this;
    }

    public function selectExpired()
    {
        $this->selectField("expired");

        return $this;
    }

    public function selectExpiryMonth()
    {
        $this->selectField("expiryMonth");

        return $this;
    }

    public function selectExpiryYear()
    {
        $this->selectField("expiryYear");

        return $this;
    }

    public function selectLastDigits()
    {
        $this->selectField("lastDigits");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
