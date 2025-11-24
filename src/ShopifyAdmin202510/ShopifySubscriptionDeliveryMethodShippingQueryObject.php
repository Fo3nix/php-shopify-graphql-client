<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryMethodShippingQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodShipping";

    public function selectAddress(ShopifySubscriptionDeliveryMethodShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingOption(ShopifySubscriptionDeliveryMethodShippingShippingOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryMethodShippingOptionQueryObject("shippingOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
