<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryMethodShippingQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodShipping";

    public function selectAddress(SubscriptionDeliveryMethodShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingOption(SubscriptionDeliveryMethodShippingShippingOptionArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryMethodShippingOptionQueryObject("shippingOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
