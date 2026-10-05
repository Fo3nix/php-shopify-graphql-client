<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryMethodLocalDeliveryQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodLocalDelivery";

    public function selectAddress(ShopifySubscriptionDeliveryMethodLocalDeliveryAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalDeliveryOption(ShopifySubscriptionDeliveryMethodLocalDeliveryLocalDeliveryOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDeliveryMethodLocalDeliveryOptionQueryObject("localDeliveryOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
