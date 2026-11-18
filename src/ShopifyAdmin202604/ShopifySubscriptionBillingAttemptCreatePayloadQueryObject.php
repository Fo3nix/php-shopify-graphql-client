<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingAttemptCreate` mutation.
 */
class ShopifySubscriptionBillingAttemptCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptCreatePayload";

    /**
     * The subscription billing attempt.
     */
    public function selectSubscriptionBillingAttempt(?ShopifySubscriptionBillingAttemptCreatePayloadSubscriptionBillingAttemptArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingAttemptCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBillingAttemptUserErrorQueryObject
    {
        $object = new ShopifyBillingAttemptUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
