<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class BusinessEntityAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "BusinessEntityAddress";

    public function selectAddress1()
    {
        $this->selectField("address1");

        return $this;
    }

    public function selectAddress2()
    {
        $this->selectField("address2");

        return $this;
    }

    public function selectCity()
    {
        $this->selectField("city");

        return $this;
    }

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectProvince()
    {
        $this->selectField("province");

        return $this;
    }

    public function selectZip()
    {
        $this->selectField("zip");

        return $this;
    }
}
