<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyAddress";

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

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectFormattedAddress()
    {
        $this->selectField("formattedAddress");

        return $this;
    }

    public function selectFormattedArea()
    {
        $this->selectField("formattedArea");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

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

    public function selectProvince()
    {
        $this->selectField("province");

        return $this;
    }

    public function selectRecipient()
    {
        $this->selectField("recipient");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectZip()
    {
        $this->selectField("zip");

        return $this;
    }

    public function selectZoneCode()
    {
        $this->selectField("zoneCode");

        return $this;
    }
}
