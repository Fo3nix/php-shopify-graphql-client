<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCustomerPaymentInstrumentUnionObject extends UnionObject
{
    public function onShopifyCustomerCreditCard()
    {
        $object = new ShopifyCustomerCreditCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomerPaypalBillingAgreement()
    {
        $object = new ShopifyCustomerPaypalBillingAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomerShopPayAgreement()
    {
        $object = new ShopifyCustomerShopPayAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
