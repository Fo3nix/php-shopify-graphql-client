<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class MailingAddressInputInputObject extends InputObject
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

    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }
}
