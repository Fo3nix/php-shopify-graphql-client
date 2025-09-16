<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryCountryCodeOrRestOfWorldQueryObject extends QueryObject
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
