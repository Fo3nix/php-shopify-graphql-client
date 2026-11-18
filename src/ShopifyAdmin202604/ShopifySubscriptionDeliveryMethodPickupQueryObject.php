<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A delivery method with a pickup option.
 */
class ShopifySubscriptionDeliveryMethodPickupQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodPickup";

    /**
     * The details of the pickup delivery method to use.
     */
    public function selectPickupOption(?ShopifySubscriptionDeliveryMethodPickupPickupOptionArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodPickupOptionQueryObject
    {
        $object = new ShopifySubscriptionDeliveryMethodPickupOptionQueryObject("pickupOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
