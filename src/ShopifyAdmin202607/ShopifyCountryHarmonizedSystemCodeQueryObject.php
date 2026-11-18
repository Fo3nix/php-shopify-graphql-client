<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The country-specific harmonized system code and ISO country code for an inventory item.
 */
class ShopifyCountryHarmonizedSystemCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCode";

    /**
     * The ISO 3166-1 alpha-2 country code for the country that issued the specified harmonized system code.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The country-specific harmonized system code. These are usually longer than 6 digits.
     */
    public function selectHarmonizedSystemCode(): static
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }
}
