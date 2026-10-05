<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCustomerPaymentInstrumentUnionObject extends UnionObject
{
    public function onShopifyBankAccount()
    {
        $object = new ShopifyBankAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

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
