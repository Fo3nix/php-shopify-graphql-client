<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleCharge` mutation.
 */
class ShopifySubscriptionBillingCycleChargePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleChargePayload";

    /**
     * The subscription billing attempt.
     */
    public function selectSubscriptionBillingAttempt(?ShopifySubscriptionBillingCycleChargePayloadSubscriptionBillingAttemptArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject("subscriptionBillingAttempt");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionBillingCycleChargePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBillingAttemptUserErrorQueryObject
    {
        $object = new ShopifyBillingAttemptUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
