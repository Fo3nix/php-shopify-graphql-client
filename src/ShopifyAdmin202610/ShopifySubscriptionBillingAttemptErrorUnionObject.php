<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionBillingAttemptErrorUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingAttemptGeneralError()
    {
        $object = new ShopifySubscriptionBillingAttemptGeneralErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptInventoryError()
    {
        $object = new ShopifySubscriptionBillingAttemptInventoryErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptPaymentError()
    {
        $object = new ShopifySubscriptionBillingAttemptPaymentErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptUnexpectedError()
    {
        $object = new ShopifySubscriptionBillingAttemptUnexpectedErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
