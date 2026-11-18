<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * Payment details related to a transaction.
 */
class ShopifyPaymentDetailsUnionObject extends UnionObject
{
    public function onShopifyCardPaymentDetails(): ShopifyCardPaymentDetailsQueryObject
    {
        $object = new ShopifyCardPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyLocalPaymentMethodsPaymentDetails(): ShopifyLocalPaymentMethodsPaymentDetailsQueryObject
    {
        $object = new ShopifyLocalPaymentMethodsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaypalWalletPaymentDetails(): ShopifyPaypalWalletPaymentDetailsQueryObject
    {
        $object = new ShopifyPaypalWalletPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyShopPayInstallmentsPaymentDetails(): ShopifyShopPayInstallmentsPaymentDetailsQueryObject
    {
        $object = new ShopifyShopPayInstallmentsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
