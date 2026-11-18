<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create or update the address of a company location.
 */
class ShopifyCompanyAddressInputInputObject extends InputObject
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $zip;
    protected $recipient;
    protected $firstName;
    protected $lastName;
    protected $phone;
    protected $zoneCode;
    protected $countryCode;

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
     * The zip or postal code of the address.
     */
    public function setZip($zip): static
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * The identity of the recipient e.g. 'Receiving Department'.
     */
    public function setRecipient($recipient): static
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * The first name of the recipient.
     */
    public function setFirstName($firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The last name of the recipient.
     */
    public function setLastName($lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * A phone number for the recipient. Formatted using E.164 standard. For example, _+16135551111_.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The alphanumeric code for the region of the address, such as the province, state, or district. For example, `ON` for Ontario, Canada.
     */
    public function setZoneCode($zoneCode): static
    {
        $this->zoneCode = $zoneCode;

        return $this;
    }

    /**
     * The two-letter code ([ISO 3166-1 alpha-2]](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format) for the country of the address. For example, `US`` for the United States.
     */
    public function setCountryCode($shopifyCountryCode): static
    {
        $this->countryCode = new RawObject($shopifyCountryCode);

        return $this;
    }
}
