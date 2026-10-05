<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyPaymentInstrumentUnionObject extends UnionObject
{
    public function onShopifyBankAccount()
    {
        $object = new ShopifyBankAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyVaultCreditCard()
    {
        $object = new ShopifyVaultCreditCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyVaultPaypalBillingAgreement()
    {
        $object = new ShopifyVaultPaypalBillingAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
