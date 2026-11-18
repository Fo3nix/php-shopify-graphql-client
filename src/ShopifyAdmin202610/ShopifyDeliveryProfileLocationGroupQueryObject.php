<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Links a location group with zones. Both are associated to a delivery profile.
 */
class ShopifyDeliveryProfileLocationGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfileLocationGroup";

    /**
     * The countries already selected in any zone for the specified location group.
     */
    public function selectCountriesInAnyZone(?ShopifyDeliveryProfileLocationGroupCountriesInAnyZoneArgumentsObject $argsObject = null): ShopifyDeliveryCountryAndZoneQueryObject
    {
        $object = new ShopifyDeliveryCountryAndZoneQueryObject("countriesInAnyZone");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The collection of locations that make up the specified location group.
     */
    public function selectLocationGroup(?ShopifyDeliveryProfileLocationGroupLocationGroupArgumentsObject $argsObject = null): ShopifyDeliveryLocationGroupQueryObject
    {
        $object = new ShopifyDeliveryLocationGroupQueryObject("locationGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The applicable zones associated to the specified location group.
     */
    public function selectLocationGroupZones(?ShopifyDeliveryProfileLocationGroupLocationGroupZonesArgumentsObject $argsObject = null): ShopifyDeliveryLocationGroupZoneConnectionQueryObject
    {
        $object = new ShopifyDeliveryLocationGroupZoneConnectionQueryObject("locationGroupZones");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
