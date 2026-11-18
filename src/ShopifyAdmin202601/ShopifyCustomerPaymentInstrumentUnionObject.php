<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * All possible instruments for CustomerPaymentMethods.
 */
class ShopifyCustomerPaymentInstrumentUnionObject extends UnionObject
{
    public function onShopifyBankAccount(): ShopifyBankAccountQueryObject
    {
        $object = new ShopifyBankAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomerCreditCard(): ShopifyCustomerCreditCardQueryObject
    {
        $object = new ShopifyCustomerCreditCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomerPaypalBillingAgreement(): ShopifyCustomerPaypalBillingAgreementQueryObject
    {
        $object = new ShopifyCustomerPaypalBillingAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomerShopPayAgreement(): ShopifyCustomerShopPayAgreementQueryObject
    {
        $object = new ShopifyCustomerShopPayAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
