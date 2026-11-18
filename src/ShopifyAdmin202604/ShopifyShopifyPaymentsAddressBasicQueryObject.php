<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify Payments address.
 */
class ShopifyShopifyPaymentsAddressBasicQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAddressBasic";

    /**
     * Line 1 of the address.
     */
    public function selectAddressLine1(): static
    {
        $this->selectField("addressLine1");

        return $this;
    }

    /**
     * Line 2 of the address.
     */
    public function selectAddressLine2(): static
    {
        $this->selectField("addressLine2");

        return $this;
    }

    /**
     * The address city.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The address country.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The address postal code.
     */
    public function selectPostalCode(): static
    {
        $this->selectField("postalCode");

        return $this;
    }

    /**
     * The address state/province/zone.
     */
    public function selectZone(): static
    {
        $this->selectField("zone");

        return $this;
    }
}
