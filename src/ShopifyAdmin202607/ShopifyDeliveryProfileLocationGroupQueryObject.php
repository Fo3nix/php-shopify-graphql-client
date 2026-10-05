<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProfileLocationGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileLocationGroup";

    public function selectCountriesInAnyZone(ShopifyDeliveryProfileLocationGroupCountriesInAnyZoneArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCountryAndZoneQueryObject("countriesInAnyZone");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationGroup(ShopifyDeliveryProfileLocationGroupLocationGroupArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryLocationGroupQueryObject("locationGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationGroupZones(ShopifyDeliveryProfileLocationGroupLocationGroupZonesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryLocationGroupZoneConnectionQueryObject("locationGroupZones");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
