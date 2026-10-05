<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptFailedStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptFailedState";

    public function selectError(ShopifySubscriptionBillingAttemptFailedStateErrorArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptErrorUnionObject("error");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
