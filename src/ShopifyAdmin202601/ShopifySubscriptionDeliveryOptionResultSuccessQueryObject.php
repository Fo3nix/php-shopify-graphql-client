<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The delivery option for a subscription contract.
 */
class ShopifySubscriptionDeliveryOptionResultSuccessQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryOptionResultSuccess";

    /**
     * The available delivery options.
     */
    public function selectDeliveryOptions(?ShopifySubscriptionDeliveryOptionResultSuccessDeliveryOptionsArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryOptionUnionObject
    {
        $object = new ShopifySubscriptionDeliveryOptionUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
