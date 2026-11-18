<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * Possible error types for a subscription billing attempt.
 */
class ShopifySubscriptionBillingAttemptErrorUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingAttemptGeneralError(): ShopifySubscriptionBillingAttemptGeneralErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptGeneralErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptInventoryError(): ShopifySubscriptionBillingAttemptInventoryErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptInventoryErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptPaymentError(): ShopifySubscriptionBillingAttemptPaymentErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptPaymentErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionBillingAttemptUnexpectedError(): ShopifySubscriptionBillingAttemptUnexpectedErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptUnexpectedErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
