<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryMethodLocalDeliveryQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodLocalDelivery";

    public function selectAddress(SubscriptionDeliveryMethodLocalDeliveryAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocalDeliveryOption(SubscriptionDeliveryMethodLocalDeliveryLocalDeliveryOptionArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDeliveryMethodLocalDeliveryOptionQueryObject("localDeliveryOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
