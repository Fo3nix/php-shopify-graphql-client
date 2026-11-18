<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The country details and the associated shipping zone.
 */
class ShopifyDeliveryCountryAndZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryAndZone";

    /**
     * The country details.
     */
    public function selectCountry(?ShopifyDeliveryCountryAndZoneCountryArgumentsObject $argsObject = null): ShopifyDeliveryCountryQueryObject
    {
        $object = new ShopifyDeliveryCountryQueryObject("country");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the shipping zone.
     */
    public function selectZone(): static
    {
        $this->selectField("zone");

        return $this;
    }
}
