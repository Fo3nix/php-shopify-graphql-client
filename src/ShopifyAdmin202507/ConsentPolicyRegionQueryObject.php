<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ConsentPolicyRegionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ConsentPolicyRegion";

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectRegionCode()
    {
        $this->selectField("regionCode");

        return $this;
    }
}
