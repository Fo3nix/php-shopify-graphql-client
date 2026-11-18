<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the address of a location.
 */
class ShopifyLocationAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationAddress";

    /**
     * The first line of the address for the location.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The second line of the address for the location.
     */
    public function selectAddress2(): static
    {
        $this->selectField("address2");

        return $this;
    }

    /**
     * The city of the location.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The country of the location.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The country code of the location.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * A formatted version of the address for the location.
     */
    public function selectFormatted(): static
    {
        $this->selectField("formatted");

        return $this;
    }

    /**
     * The approximate latitude coordinates of the location.
     */
    public function selectLatitude(): static
    {
        $this->selectField("latitude");

        return $this;
    }

    /**
     * The approximate longitude coordinates of the location.
     */
    public function selectLongitude(): static
    {
        $this->selectField("longitude");

        return $this;
    }

    /**
     * The phone number of the location.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The province of the location.
     */
    public function selectProvince(): static
    {
        $this->selectField("province");

        return $this;
    }

    /**
     * The code for the province, state, or district of the address of the location.
     */
    public function selectProvinceCode(): static
    {
        $this->selectField("provinceCode");

        return $this;
    }

    /**
     * The ZIP code of the location.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}
