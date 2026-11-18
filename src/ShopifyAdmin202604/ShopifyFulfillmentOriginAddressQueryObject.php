<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The address at which the fulfillment occurred. This object is intended for tax purposes, as a full address is required for tax providers to accurately calculate taxes. Typically this is the address of the warehouse or fulfillment center. To retrieve a fulfillment location's address, use the `assignedLocation` field on the [`FulfillmentOrder`](/docs/api/admin-graphql/latest/objects/FulfillmentOrder) object instead.
 */
class ShopifyFulfillmentOriginAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOriginAddress";

    /**
     * The street address of the fulfillment location.
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
     * The city in which the fulfillment location is located.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The country code of the fulfillment location.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The province code of the fulfillment location.
     */
    public function selectProvinceCode(): static
    {
        $this->selectField("provinceCode");

        return $this;
    }

    /**
     * The zip code of the fulfillment location.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}
