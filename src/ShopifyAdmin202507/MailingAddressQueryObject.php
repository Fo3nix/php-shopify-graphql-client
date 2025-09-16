<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MailingAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "MailingAddress";

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

    public function selectCompany()
    {
        $this->selectField("company");

        return $this;
    }

    public function selectCoordinatesValidated()
    {
        $this->selectField("coordinatesValidated");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * @deprecated Use `countryCodeV2` instead.
     */
    public function selectCountryCode()
    {
        $this->selectField("countryCode");

        return $this;
    }

    public function selectCountryCodeV2()
    {
        $this->selectField("countryCodeV2");

        return $this;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectFormatted()
    {
        $this->selectField("formatted");

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

    public function selectLatitude()
    {
        $this->selectField("latitude");

        return $this;
    }

    public function selectLongitude()
    {
        $this->selectField("longitude");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

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

    public function selectProvinceCode()
    {
        $this->selectField("provinceCode");

        return $this;
    }

    public function selectTimeZone()
    {
        $this->selectField("timeZone");

        return $this;
    }

    public function selectValidationResultSummary()
    {
        $this->selectField("validationResultSummary");

        return $this;
    }

    public function selectZip()
    {
        $this->selectField("zip");

        return $this;
    }
}
