<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyPaymentDetailsUnionObject extends UnionObject
{
    public function onShopifyCardPaymentDetails()
    {
        $object = new ShopifyCardPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyLocalPaymentMethodsPaymentDetails()
    {
        $object = new ShopifyLocalPaymentMethodsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaypalWalletPaymentDetails()
    {
        $object = new ShopifyPaypalWalletPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyShopPayInstallmentsPaymentDetails()
    {
        $object = new ShopifyShopPayInstallmentsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
