<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryOptionResultSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryOptionResultSuccess";

    public function selectDeliveryOptions(SubscriptionDeliveryOptionResultSuccessDeliveryOptionsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryOptionUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
