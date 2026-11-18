<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleEditsDelete` mutation.
 */
class ShopifySubscriptionBillingCycleEditsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleEditsDeletePayload";

    /**
     * The list of updated billing cycles.
     */
    public function selectBillingCycles(?ShopifySubscriptionBillingCycleEditsDeletePayloadBillingCyclesArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleEditsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
