<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleEditDelete` mutation.
 */
class ShopifySubscriptionBillingCycleEditDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleEditDeletePayload";

    /**
     * The list of updated billing cycles.
     */
    public function selectBillingCycles(?ShopifySubscriptionBillingCycleEditDeletePayloadBillingCyclesArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("billingCycles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionBillingCycleEditDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
