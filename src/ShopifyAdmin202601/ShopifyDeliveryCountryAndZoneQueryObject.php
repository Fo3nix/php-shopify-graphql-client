<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCountryAndZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryAndZone";

    public function selectCountry(ShopifyDeliveryCountryAndZoneCountryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCountryQueryObject("country");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectZone()
    {
        $this->selectField("zone");

        return $this;
    }
}
