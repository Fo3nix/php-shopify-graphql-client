<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The billing attempt state that requires an action to resolve.
 * Must complete the action required for the billing attempt to continue being processed.
 */
class ShopifySubscriptionBillingAttemptActionRequiredStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptActionRequiredState";

    /**
     * The action required to resolve the billing attempt.
     */
    public function selectAction(?ShopifySubscriptionBillingAttemptActionRequiredStateActionArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptActionUnionObject
    {
        $object = new ShopifySubscriptionBillingAttemptActionUnionObject("action");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
