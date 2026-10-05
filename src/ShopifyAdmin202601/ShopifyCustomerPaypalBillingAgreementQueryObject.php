<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerPaypalBillingAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaypalBillingAgreement";

    public function selectBillingAddress(ShopifyCustomerPaypalBillingAgreementBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerPaymentInstrumentBillingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectPaypalAccountEmail()
    {
        $this->selectField("paypalAccountEmail");

        return $this;
    }
}
