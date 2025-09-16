<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryMethodPickupOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryMethodPickupOption";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectLocation(SubscriptionDeliveryMethodPickupOptionLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPresentmentTitle()
    {
        $this->selectField("presentmentTitle");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
