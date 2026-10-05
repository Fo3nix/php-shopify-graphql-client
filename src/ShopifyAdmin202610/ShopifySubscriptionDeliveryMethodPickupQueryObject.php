<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryMethodPickupQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodPickup";

    public function selectPickupOption(ShopifySubscriptionDeliveryMethodPickupPickupOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryMethodPickupOptionQueryObject("pickupOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
