<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCountryCodesOrRestOfWorldQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCountryCodesOrRestOfWorld";

    public function selectCountryCodes()
    {
        $this->selectField("countryCodes");

        return $this;
    }

    public function selectRestOfWorld()
    {
        $this->selectField("restOfWorld");

        return $this;
    }
}
