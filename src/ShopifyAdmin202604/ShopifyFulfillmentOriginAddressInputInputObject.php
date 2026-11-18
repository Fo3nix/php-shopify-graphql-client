<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to include the address at which the fulfillment occurred. This input object is intended for tax purposes, as a full address is required for tax providers to accurately calculate taxes. Typically this is the address of the warehouse or fulfillment center. To retrieve a fulfillment location's address, use the `assignedLocation` field on the [`FulfillmentOrder`](/docs/api/admin-graphql/latest/objects/FulfillmentOrder) object instead.
 */
class ShopifyFulfillmentOriginAddressInputInputObject extends InputObject
{
    const REQUIRED = ["countryCode"];

    protected $address1;
    protected $address2;
    protected $city;
    protected $zip;
    protected $provinceCode;
    protected $countryCode;

    /**
     * The street address of the fulfillment location.
     */
    public function setAddress1($address1): static
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * The second line of the address. Typically the number of the apartment, suite, or unit.
     */
    public function setAddress2($address2): static
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * The city in which the fulfillment location is located.
     */
    public function setCity($city): static
    {
        $this->city = $city;

        return $this;
    }

    /**
     * The zip code of the fulfillment location.
     */
    public function setZip($zip): static
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * The province of the fulfillment location.
     */
    public function setProvinceCode($provinceCode): static
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }

    /**
     * The country of the fulfillment location.
     */
    public function setCountryCode($countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
