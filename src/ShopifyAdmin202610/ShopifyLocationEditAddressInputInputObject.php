<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to use to edit the address of a location.
 */
class ShopifyLocationEditAddressInputInputObject extends InputObject
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $phone;
    protected $zip;
    protected $countryCode;
    protected $provinceCode;

    /**
     * The first line of the address.
     */
    public function setAddress1($address1): static
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * The second line of the address.
     */
    public function setAddress2($address2): static
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * The name of the city, district, village, or town.
     */
    public function setCity($city): static
    {
        $this->city = $city;

        return $this;
    }

    /**
     * The phone number of the location.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The ZIP code or postal code of the location.
     */
    public function setZip($zip): static
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * The two-letter code of country for the address.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * The code for the region of the address, such as the state, province, or district.
     * For example CA for California, United States.
     */
    public function setProvinceCode($provinceCode): static
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }
}
