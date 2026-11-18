<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a shipping delivery method: a mailing address and a shipping option.
 */
class ShopifySubscriptionDeliveryMethodShippingQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodShipping";

    /**
     * The address to ship to.
     */
    public function selectAddress(?ShopifySubscriptionDeliveryMethodShippingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The details of the shipping method to use.
     */
    public function selectShippingOption(?ShopifySubscriptionDeliveryMethodShippingShippingOptionArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodShippingOptionQueryObject
    {
        $object = new ShopifySubscriptionDeliveryMethodShippingOptionQueryObject("shippingOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
