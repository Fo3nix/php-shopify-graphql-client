<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An address for a shop.
 */
class ShopifyShopAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopAddress";

    /**
     * The first line of the address. Typically the street address or PO Box number.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The second line of the address. Typically the number of the apartment, suite, or unit.
     */
    public function selectAddress2(): static
    {
        $this->selectField("address2");

        return $this;
    }

    /**
     * The name of the city, district, village, or town.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The name of the company or organization.
     */
    public function selectCompany(): static
    {
        $this->selectField("company");

        return $this;
    }

    /**
     * Whether the address coordinates are valid.
     */
    public function selectCoordinatesValidated(): static
    {
        $this->selectField("coordinatesValidated");

        return $this;
    }

    /**
     * The name of the country.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The two-letter code for the country of the address.
     *
     * For example, US.
     *
     * @deprecated Use `countryCodeV2` instead.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The two-letter code for the country of the address.
     *
     * For example, US.
     */
    public function selectCountryCodeV2(): static
    {
        $this->selectField("countryCodeV2");

        return $this;
    }

    /**
     * The first name.
     *
     * @deprecated Always null in this context.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * A formatted version of the address, customized by the provided arguments.
     */
    public function selectFormatted(): static
    {
        $this->selectField("formatted");

        return $this;
    }

    /**
     * A comma-separated list of the values for city, province, and country.
     */
    public function selectFormattedArea(): static
    {
        $this->selectField("formattedArea");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The last name.
     *
     * @deprecated Always null in this context.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The latitude coordinate of the address.
     */
    public function selectLatitude(): static
    {
        $this->selectField("latitude");

        return $this;
    }

    /**
     * The longitude coordinate of the address.
     */
    public function selectLongitude(): static
    {
        $this->selectField("longitude");

        return $this;
    }

    /**
     * The full name, based on firstName and lastName.
     *
     * @deprecated Always null in this context.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A phone number associated with the address.
     *
     * Formatted using E.164 standard. For example, _+16135551111_.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The region of the address, such as the province, state, or district.
     */
    public function selectProvince(): static
    {
        $this->selectField("province");

        return $this;
    }

    /**
     * The alphanumeric code for the region.
     *
     * For example, ON.
     */
    public function selectProvinceCode(): static
    {
        $this->selectField("provinceCode");

        return $this;
    }

    /**
     * The zip or postal code of the address.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}
