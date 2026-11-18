<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the geographic scope where a shipping discount can be applied based on customer shipping destinations. This configuration determines which countries are eligible for the promotional offer.
 *
 * For example, a "Free Shipping to EU" promotion would specify European Union countries, while a domestic-only sale might target just the store's home country.
 *
 * The object includes both specific country selections and an option to include all remaining countries not explicitly listed, providing flexible geographic targeting for international merchants.
 */
class ShopifyDiscountCountriesQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCountries";

    /**
     * The codes for the countries where the discount can be applied.
     */
    public function selectCountries(): static
    {
        $this->selectField("countries");

        return $this;
    }

    /**
     * Whether the discount is applicable to countries that haven't been defined in the shop's shipping zones.
     *
     * @deprecated This field is being retired. Discounts that set `includeRestOfWorld: true` will be converted to an explicit list of countries, and `countries` will then return every country where the discount applies.
     */
    public function selectIncludeRestOfWorld(): static
    {
        $this->selectField("includeRestOfWorld");

        return $this;
    }
}
