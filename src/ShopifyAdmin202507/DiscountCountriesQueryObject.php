<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCountriesQueryObject extends QueryObject
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
