<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleBulkCharge` mutation.
 */
class ShopifySubscriptionBillingCycleBulkChargePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleBulkChargePayload";

    /**
     * The asynchronous job that performs the action on the targeted billing cycles.
     */
    public function selectJob(?ShopifySubscriptionBillingCycleBulkChargePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionBillingCycleBulkChargePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleBulkUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleBulkUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
