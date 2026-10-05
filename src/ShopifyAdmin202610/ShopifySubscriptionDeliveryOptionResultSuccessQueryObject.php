<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryOptionResultSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryOptionResultSuccess";

    public function selectDeliveryOptions(ShopifySubscriptionDeliveryOptionResultSuccessDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryOptionUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
