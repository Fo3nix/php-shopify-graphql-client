<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The list of country codes and information whether the countries
 * are a part of the 'Rest Of World' shipping zone.
 */
class ShopifyDeliveryCountryCodesOrRestOfWorldQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryCodesOrRestOfWorld";

    /**
     * List of applicable country codes in the ISO 3166-1 alpha-2 format.
     */
    public function selectCountryCodes(): static
    {
        $this->selectField("countryCodes");

        return $this;
    }

    /**
     * Whether the countries are a part of the 'Rest of World' shipping zone.
     */
    public function selectRestOfWorld(): static
    {
        $this->selectField("restOfWorld");

        return $this;
    }
}
