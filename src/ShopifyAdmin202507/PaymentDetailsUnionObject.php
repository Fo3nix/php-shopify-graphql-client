<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class PaymentDetailsUnionObject extends UnionObject
{
    public function onCardPaymentDetails()
    {
        $object = new CardPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocalPaymentMethodsPaymentDetails()
    {
        $object = new LocalPaymentMethodsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaypalWalletPaymentDetails()
    {
        $object = new PaypalWalletPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopPayInstallmentsPaymentDetails()
    {
        $object = new ShopPayInstallmentsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
