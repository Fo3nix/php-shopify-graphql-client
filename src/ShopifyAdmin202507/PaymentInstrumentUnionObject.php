<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class PaymentInstrumentUnionObject extends UnionObject
{
    public function onVaultCreditCard()
    {
        $object = new VaultCreditCardQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onVaultPaypalBillingAgreement()
    {
        $object = new VaultPaypalBillingAgreementQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
