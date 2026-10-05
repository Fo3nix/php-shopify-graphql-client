<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCountriesInShippingZonesQueryObject extends QueryObject
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
