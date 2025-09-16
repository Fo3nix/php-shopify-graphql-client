<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerShopPayAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerShopPayAgreement";

    public function selectBillingAddress(CustomerShopPayAgreementBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new CustomerCreditCardBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpiresSoon()
    {
        $this->selectField("expiresSoon");

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

    public function selectInactive()
    {
        $this->selectField("inactive");

        return $this;
    }

    public function selectIsRevocable()
    {
        $this->selectField("isRevocable");

        return $this;
    }

    public function selectLastDigits()
    {
        $this->selectField("lastDigits");

        return $this;
    }

    public function selectMaskedNumber()
    {
        $this->selectField("maskedNumber");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
