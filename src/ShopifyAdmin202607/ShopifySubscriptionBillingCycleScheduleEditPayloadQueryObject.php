<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleScheduleEdit` mutation.
 */
class ShopifySubscriptionBillingCycleScheduleEditPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleScheduleEditPayload";

    /**
     * The updated billing cycle.
     */
    public function selectBillingCycle(?ShopifySubscriptionBillingCycleScheduleEditPayloadBillingCycleArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleScheduleEditPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
