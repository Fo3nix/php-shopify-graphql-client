<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCountryAllQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCountryAll";

    public function selectAllCountries()
    {
        $this->selectField("allCountries");

        return $this;
    }
}
