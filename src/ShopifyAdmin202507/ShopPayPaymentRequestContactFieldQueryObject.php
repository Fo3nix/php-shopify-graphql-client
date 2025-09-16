<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestContactFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestContactField";

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

    public function selectCompanyName()
    {
        $this->selectField("companyName");

        return $this;
    }

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    public function selectPostalCode()
    {
        $this->selectField("postalCode");

        return $this;
    }

    public function selectProvinceCode()
    {
        $this->selectField("provinceCode");

        return $this;
    }
}
