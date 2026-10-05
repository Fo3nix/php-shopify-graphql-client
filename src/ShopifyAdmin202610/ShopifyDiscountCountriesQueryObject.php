<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCountriesQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCountries";

    public function selectCountries()
    {
        $this->selectField("countries");

        return $this;
    }

    /**
     * @deprecated This field is being retired. Discounts that set `includeRestOfWorld: true` will be converted to an explicit list of countries, and `countries` will then return every country where the discount applies.
     */
    public function selectIncludeRestOfWorld()
    {
        $this->selectField("includeRestOfWorld");

        return $this;
    }
}
