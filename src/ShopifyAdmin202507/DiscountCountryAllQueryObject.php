<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCountryAllQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCountryAll";

    public function selectAllCountries()
    {
        $this->selectField("allCountries");

        return $this;
    }
}
