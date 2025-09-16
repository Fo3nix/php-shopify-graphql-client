<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CountriesInShippingZonesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CountriesInShippingZones";

    public function selectCountryCodes()
    {
        $this->selectField("countryCodes");

        return $this;
    }

    public function selectIncludeRestOfWorld()
    {
        $this->selectField("includeRestOfWorld");

        return $this;
    }
}
