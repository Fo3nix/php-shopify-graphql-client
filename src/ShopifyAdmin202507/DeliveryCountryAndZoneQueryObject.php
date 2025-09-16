<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCountryAndZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryAndZone";

    public function selectCountry(DeliveryCountryAndZoneCountryArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCountryQueryObject("country");
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
