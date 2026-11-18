<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The billing address of a payment instrument.
 */
class ShopifyCustomerPaymentInstrumentBillingAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentInstrumentBillingAddress";

    /**
     * The first line of the address. Typically the street address or PO Box number.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

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
     * The name of the buyer of the address.
     */
    public function selectName(): static
    {
        $this->selectField("name");

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
