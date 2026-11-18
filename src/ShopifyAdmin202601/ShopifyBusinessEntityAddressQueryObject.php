<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the address of a merchant's Business Entity.
 */
class ShopifyBusinessEntityAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "BusinessEntityAddress";

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
     * The country code of the merchant's Business Entity.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

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
     * The zip or postal code of the address.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}
