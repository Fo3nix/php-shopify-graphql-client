<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleSkip` mutation.
 */
class ShopifySubscriptionBillingCycleSkipPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleSkipPayload";

    /**
     * The updated billing cycle.
     */
    public function selectBillingCycle(?ShopifySubscriptionBillingCycleSkipPayloadBillingCycleArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("billingCycle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionBillingCycleSkipPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleSkipUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleSkipUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
