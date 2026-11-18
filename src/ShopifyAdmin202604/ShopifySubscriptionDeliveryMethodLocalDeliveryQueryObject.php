<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription delivery method for local delivery.
 * The other subscription delivery methods can be found in the `SubscriptionDeliveryMethod` union type.
 */
class ShopifySubscriptionDeliveryMethodLocalDeliveryQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodLocalDelivery";

    /**
     * The address to deliver to.
     */
    public function selectAddress(?ShopifySubscriptionDeliveryMethodLocalDeliveryAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The details of the local delivery method to use.
     */
    public function selectLocalDeliveryOption(?ShopifySubscriptionDeliveryMethodLocalDeliveryLocalDeliveryOptionArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodLocalDeliveryOptionQueryObject
    {
        $object = new ShopifySubscriptionDeliveryMethodLocalDeliveryOptionQueryObject("localDeliveryOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
