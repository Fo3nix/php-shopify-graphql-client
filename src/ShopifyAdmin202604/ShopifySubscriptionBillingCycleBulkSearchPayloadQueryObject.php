<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleBulkSearch` mutation.
 */
class ShopifySubscriptionBillingCycleBulkSearchPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleBulkSearchPayload";

    /**
     * The asynchronous job that performs the action on the targeted billing cycles.
     */
    public function selectJob(?ShopifySubscriptionBillingCycleBulkSearchPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleBulkSearchPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleBulkUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleBulkUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
