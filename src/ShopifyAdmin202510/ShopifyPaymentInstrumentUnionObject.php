<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyPaymentInstrumentUnionObject extends UnionObject
{
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
