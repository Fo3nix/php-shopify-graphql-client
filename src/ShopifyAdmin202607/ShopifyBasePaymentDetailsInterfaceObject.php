<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Generic payment details that are related to a transaction.
 */
class ShopifyBasePaymentDetailsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "BasePaymentDetails";

    /**
     * The name of payment method used by the buyer.
     */
    public function selectPaymentMethodName(): static
    {
        $this->selectField("paymentMethodName");

        return $this;
    }

    public function onCardPaymentDetails(): ShopifyCardPaymentDetailsQueryObject
    {
        $object = new ShopifyCardPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocalPaymentMethodsPaymentDetails(): ShopifyLocalPaymentMethodsPaymentDetailsQueryObject
    {
        $object = new ShopifyLocalPaymentMethodsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaypalWalletPaymentDetails(): ShopifyPaypalWalletPaymentDetailsQueryObject
    {
        $object = new ShopifyPaypalWalletPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopPayInstallmentsPaymentDetails(): ShopifyShopPayInstallmentsPaymentDetailsQueryObject
    {
        $object = new ShopifyShopPayInstallmentsPaymentDetailsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
