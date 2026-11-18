<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * All possible instrument outputs for Payment Mandates.
 */
class ShopifyPaymentInstrumentUnionObject extends UnionObject
{
    public function onShopifyBankAccount(): ShopifyBankAccountQueryObject
    {
        $object = new ShopifyBankAccountQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyVaultCreditCard(): ShopifyVaultCreditCardQueryObject
    {
        $object = new ShopifyVaultCreditCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyVaultPaypalBillingAgreement(): ShopifyVaultPaypalBillingAgreementQueryObject
    {
        $object = new ShopifyVaultPaypalBillingAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
