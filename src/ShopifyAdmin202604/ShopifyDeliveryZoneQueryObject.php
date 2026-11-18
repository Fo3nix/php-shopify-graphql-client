<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A zone is a group of countries that have the same shipping rates. Customers can order products from a store only if they choose a shipping destination that's included in one of the store's zones.
 */
class ShopifyDeliveryZoneQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryZone";

    /**
     * The list of countries within the zone.
     */
    public function selectCountries(?ShopifyDeliveryZoneCountriesArgumentsObject $argsObject = null): ShopifyDeliveryCountryQueryObject
    {
        $object = new ShopifyDeliveryCountryQueryObject("countries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the zone.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
