<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class CustomerPaymentInstrumentUnionObject extends UnionObject
{
    public function onCustomerCreditCard()
    {
        $object = new CustomerCreditCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerPaypalBillingAgreement()
    {
        $object = new CustomerPaypalBillingAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerShopPayAgreement()
    {
        $object = new CustomerShopPayAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
