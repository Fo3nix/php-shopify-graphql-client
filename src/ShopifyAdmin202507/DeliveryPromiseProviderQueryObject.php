<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryPromiseProviderQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseProvider";

    public function selectActive()
    {
        $this->selectField("active");

        return $this;
    }

    public function selectFulfillmentDelay()
    {
        $this->selectField("fulfillmentDelay");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLocation(DeliveryPromiseProviderLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTimeZone()
    {
        $this->selectField("timeZone");

        return $this;
    }
}
