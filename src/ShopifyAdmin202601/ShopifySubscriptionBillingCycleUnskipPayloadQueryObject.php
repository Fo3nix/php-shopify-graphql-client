<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleUnskip` mutation.
 */
class ShopifySubscriptionBillingCycleUnskipPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleUnskipPayload";

    /**
     * The updated billing cycle.
     */
    public function selectBillingCycle(?ShopifySubscriptionBillingCycleUnskipPayloadBillingCycleArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleUnskipPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleUnskipUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUnskipUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
