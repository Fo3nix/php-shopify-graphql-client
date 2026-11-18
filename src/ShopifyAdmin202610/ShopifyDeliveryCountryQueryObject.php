<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A country that is used to define a shipping zone.
 */
class ShopifyDeliveryCountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountry";

    /**
     * A two-letter country code in ISO 3166-1 alpha-2 standard.
     * It also includes a flag indicating whether the country should be
     * a part of the 'Rest Of World' shipping zone.
     */
    public function selectCode(?ShopifyDeliveryCountryCodeArgumentsObject $argsObject = null): ShopifyDeliveryCountryCodeOrRestOfWorldQueryObject
    {
        $object = new ShopifyDeliveryCountryCodeOrRestOfWorldQueryObject("code");
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
     * The full name of the country.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The list of regions associated with this country.
     */
    public function selectProvinces(?ShopifyDeliveryCountryProvincesArgumentsObject $argsObject = null): ShopifyDeliveryProvinceQueryObject
    {
        $object = new ShopifyDeliveryProvinceQueryObject("provinces");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The translated name of the country. The translation returned is based on the system's locale.
     */
    public function selectTranslatedName(): static
    {
        $this->selectField("translatedName");

        return $this;
    }
}
