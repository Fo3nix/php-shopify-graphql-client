<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsAddressBasicQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAddressBasic";

    public function selectAddressLine1()
    {
        $this->selectField("addressLine1");

        return $this;
    }

    public function selectAddressLine2()
    {
        $this->selectField("addressLine2");

        return $this;
    }

    public function selectCity()
    {
        $this->selectField("city");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectPostalCode()
    {
        $this->selectField("postalCode");

        return $this;
    }

    public function selectZone()
    {
        $this->selectField("zone");

        return $this;
    }
}
