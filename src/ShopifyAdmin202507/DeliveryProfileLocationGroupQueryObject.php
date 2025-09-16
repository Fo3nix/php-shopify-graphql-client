<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProfileLocationGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileLocationGroup";

    public function selectCountriesInAnyZone(DeliveryProfileLocationGroupCountriesInAnyZoneArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCountryAndZoneQueryObject("countriesInAnyZone");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationGroup(DeliveryProfileLocationGroupLocationGroupArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLocationGroupQueryObject("locationGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationGroupZones(DeliveryProfileLocationGroupLocationGroupZonesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLocationGroupZoneConnectionQueryObject("locationGroupZones");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
