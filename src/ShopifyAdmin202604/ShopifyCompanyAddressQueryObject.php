<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a billing or shipping address for a company location.
 */
class ShopifyCompanyAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyAddress";

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
     * The name of the company.
     */
    public function selectCompanyName(): static
    {
        $this->selectField("companyName");

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
     * For example, US.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company address was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The first name of the recipient.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * The formatted version of the address.
     */
    public function selectFormattedAddress(): static
    {
        $this->selectField("formattedAddress");

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
     * The last name of the recipient.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * A unique phone number for the customer.
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
     * The identity of the recipient e.g. 'Receiving Department'.
     */
    public function selectRecipient(): static
    {
        $this->selectField("recipient");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company address was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

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

    /**
     * The alphanumeric code for the region.
     * For example, ON.
     */
    public function selectZoneCode(): static
    {
        $this->selectField("zoneCode");

        return $this;
    }
}
