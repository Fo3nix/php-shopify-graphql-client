<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptActionRequiredStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptActionRequiredState";

    public function selectAction(ShopifySubscriptionBillingAttemptActionRequiredStateActionArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptActionUnionObject("action");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
