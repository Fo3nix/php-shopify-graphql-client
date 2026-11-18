<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A physical mailing address. For example, a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s default address and an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)'s billing address are both mailing addresses. Stores standard address components, customer name information, and company details.
 *
 * The address includes geographic coordinates ([`latitude`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress#field-MailingAddress.fields.latitude) and [`longitude`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress#field-MailingAddress.fields.longitude)). You can format addresses for display using the [`formatted`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress#field-MailingAddress.fields.formatted) field with options to include or exclude name and company information.
 */
class ShopifyMailingAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "MailingAddress";

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
     * The name of the customer's company or organization.
     */
    public function selectCompany(): static
    {
        $this->selectField("company");

        return $this;
    }

    /**
     * Whether the address corresponds to recognized latitude and longitude values.
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
     * The first name of the customer.
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
     * The last name of the customer.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The latitude coordinate of the customer address.
     */
    public function selectLatitude(): static
    {
        $this->selectField("latitude");

        return $this;
    }

    /**
     * The longitude coordinate of the customer address.
     */
    public function selectLongitude(): static
    {
        $this->selectField("longitude");

        return $this;
    }

    /**
     * The full name of the customer, based on firstName and lastName.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A unique phone number for the customer.
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
     * The time zone of the address.
     */
    public function selectTimeZone(): static
    {
        $this->selectField("timeZone");

        return $this;
    }

    /**
     * The validation status that's leveraged by the address validation feature in the Shopify Admin.
     * See ["Validating addresses in your Shopify admin"](https://help.shopify.com/manual/fulfillment/managing-orders/validating-order-address) for more details.
     */
    public function selectValidationResultSummary(): static
    {
        $this->selectField("validationResultSummary");

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
