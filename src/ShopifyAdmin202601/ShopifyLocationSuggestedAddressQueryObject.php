<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a suggested address for a location.
 */
class ShopifyLocationSuggestedAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationSuggestedAddress";

    /**
     * The first line of the suggested address.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The second line of the suggested address.
     */
    public function selectAddress2(): static
    {
        $this->selectField("address2");

        return $this;
    }

    /**
     * The city of the suggested address.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The country of the suggested address.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The country code of the suggested address.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * A formatted version of the suggested address.
     */
    public function selectFormatted(): static
    {
        $this->selectField("formatted");

        return $this;
    }

    /**
     * The province of the suggested address.
     */
    public function selectProvince(): static
    {
        $this->selectField("province");

        return $this;
    }

    /**
     * The code for the province, state, or district of the suggested address.
     */
    public function selectProvinceCode(): static
    {
        $this->selectField("provinceCode");

        return $this;
    }

    /**
     * The ZIP code of the suggested address.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}
