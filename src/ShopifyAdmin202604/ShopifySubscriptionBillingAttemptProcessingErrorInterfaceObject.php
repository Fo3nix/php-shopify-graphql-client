<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * An error that prevented a billing attempt.
 */
class ShopifySubscriptionBillingAttemptProcessingErrorInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptProcessingError";

    /**
     * The code for the error.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * An explanation of the error.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    public function onSubscriptionBillingAttemptGenericError(): ShopifySubscriptionBillingAttemptGenericErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptGenericErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingAttemptInsufficientStockProductVariantsError(): ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSubscriptionBillingAttemptOutOfStockProductVariantsError(): ShopifySubscriptionBillingAttemptOutOfStockProductVariantsErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptOutOfStockProductVariantsErrorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
