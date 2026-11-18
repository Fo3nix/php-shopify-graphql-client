<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The billing attempt completed successfully and created an order.
 */
class ShopifySubscriptionBillingAttemptSuccessStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptSuccessState";

    /**
     * The order created by the successful billing attempt. May be null if the order was deleted.
     */
    public function selectOrder(?ShopifySubscriptionBillingAttemptSuccessStateOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
