<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCountryCodeOrRestOfWorldQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryCodeOrRestOfWorld";

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectRestOfWorld()
    {
        $this->selectField("restOfWorld");

        return $this;
    }
}
