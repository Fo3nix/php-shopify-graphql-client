<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create or update a mailing address.
 */
class ShopifyMailingAddressInputInputObject extends InputObject
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $company;
    protected $countryCode;
    protected $firstName;
    protected $lastName;
    protected $phone;
    protected $provinceCode;
    protected $zip;

    /**
     * The first line of the address. Typically the street address or PO Box number.
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
     * The name of the city, district, village, or town.
     */
    public function setCity($city): static
    {
        $this->city = $city;

        return $this;
    }

    /**
     * The name of the customer's company or organization.
     */
    public function setCompany($company): static
    {
        $this->company = $company;

        return $this;
    }

    /**
     * The two-letter code for the country of the address.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * The first name of the customer.
     */
    public function setFirstName($firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The last name of the customer.
     */
    public function setLastName($lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * A unique phone number for the customer.
     *
     * Formatted using E.164 standard. For example, _+16135551111_.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The code for the region of the address, such as the province, state, or district.
     * For example QC for Quebec, Canada.
     */
    public function setProvinceCode($provinceCode): static
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }

    /**
     * The zip or postal code of the address.
     */
    public function setZip($zip): static
    {
        $this->zip = $zip;

        return $this;
    }
}
