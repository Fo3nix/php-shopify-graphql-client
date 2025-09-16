<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CountryHarmonizedSystemCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountryHarmonizedSystemCode";

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectHarmonizedSystemCode()
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }
}
