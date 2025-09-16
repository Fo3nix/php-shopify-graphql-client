<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryMethodPickupQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodPickup";

    public function selectPickupOption(SubscriptionDeliveryMethodPickupPickupOptionArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryMethodPickupOptionQueryObject("pickupOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
