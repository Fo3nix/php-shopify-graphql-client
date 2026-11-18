<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The billing attempt failed due to an error.
 */
class ShopifySubscriptionBillingAttemptFailedStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptFailedState";

    /**
     * The error that caused the billing attempt to fail.
     */
    public function selectError(?ShopifySubscriptionBillingAttemptFailedStateErrorArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptErrorUnionObject
    {
        $object = new ShopifySubscriptionBillingAttemptErrorUnionObject("error");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
