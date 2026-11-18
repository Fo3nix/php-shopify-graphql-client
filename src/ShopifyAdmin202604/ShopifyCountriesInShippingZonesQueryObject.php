<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The list of all the countries from the combined shipping zones for the shop.
 */
class ShopifyCountriesInShippingZonesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountriesInShippingZones";

    /**
     * The list of all the countries from all the combined shipping zones.
     */
    public function selectCountryCodes(): static
    {
        $this->selectField("countryCodes");

        return $this;
    }

    /**
     * Whether 'Rest of World' has been defined in any of the shipping zones.
     */
    public function selectIncludeRestOfWorld(): static
    {
        $this->selectField("includeRestOfWorld");

        return $this;
    }
}
