<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCountriesQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCountries";

    public function selectCountries()
    {
        $this->selectField("countries");

        return $this;
    }

    public function selectIncludeRestOfWorld()
    {
        $this->selectField("includeRestOfWorld");

        return $this;
    }
}
