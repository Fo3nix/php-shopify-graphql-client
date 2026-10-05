<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptSuccessStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptSuccessState";

    public function selectOrder(ShopifySubscriptionBillingAttemptSuccessStateOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
