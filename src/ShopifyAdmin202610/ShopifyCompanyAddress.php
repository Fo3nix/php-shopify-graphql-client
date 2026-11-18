<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;

/**
 * Represents a billing or shipping address for a company location.
 */
class ShopifyCompanyAddress implements ShopifyNode
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $companyName;
    protected $country;
    protected $countryCode;
    protected $createdAt;
    protected $firstName;
    protected $formattedAddress;
    protected $formattedArea;
    protected $id;
    protected $lastName;
    protected $phone;
    protected $province;
    protected $recipient;
    protected $updatedAt;
    protected $zip;
    protected $zoneCode;

    
    /**
     * The first line of the address. Typically the street address or PO Box number.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    
    /**
     * The second line of the address. Typically the number of the apartment, suite, or unit.
     *
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    
    /**
     * The name of the city, district, village, or town.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The name of the company.
     *
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    
    /**
     * The name of the country.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The two-letter code for the country of the address.
     * For example, US.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company address was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The first name of the recipient.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * The formatted version of the address.
     *
     * @return string[]
     */
    public function getFormattedAddress(): ?array
    {
        return $this->formattedAddress;
    }

    
    /**
     * A comma-separated list of the values for city, province, and country.
     *
     * @return string
     */
    public function getFormattedArea(): ?string
    {
        return $this->formattedArea;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The last name of the recipient.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * A unique phone number for the customer.
     * Formatted using E.164 standard. For example, _+16135551111_.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The region of the address, such as the province, state, or district.
     *
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    
    /**
     * The identity of the recipient e.g. 'Receiving Department'.
     *
     * @return string
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) at which the company address was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The zip or postal code of the address.
     *
     * @return string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    
    /**
     * The alphanumeric code for the region.
     * For example, ON.
     *
     * @return string
     */
    public function getZoneCode(): ?string
    {
        return $this->zoneCode;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address1']) && $data['address1'] !== null) {
                $instance->address1 = $data['address1'];
            }
            if (isset($data['address2']) && $data['address2'] !== null) {
                $instance->address2 = $data['address2'];
            }
            if (isset($data['city']) && $data['city'] !== null) {
                $instance->city = $data['city'];
            }
            if (isset($data['companyName']) && $data['companyName'] !== null) {
                $instance->companyName = $data['companyName'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['formattedAddress']) && $data['formattedAddress'] !== null) {
                $instance->formattedAddress = $data['formattedAddress'];
            }
            if (isset($data['formattedArea']) && $data['formattedArea'] !== null) {
                $instance->formattedArea = $data['formattedArea'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['province']) && $data['province'] !== null) {
                $instance->province = $data['province'];
            }
            if (isset($data['recipient']) && $data['recipient'] !== null) {
                $instance->recipient = $data['recipient'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['zip']) && $data['zip'] !== null) {
                $instance->zip = $data['zip'];
            }
            if (isset($data['zoneCode']) && $data['zoneCode'] !== null) {
                $instance->zoneCode = $data['zoneCode'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->address1 !== null) {
                $data['address1'] = $this->address1;
            }
            if ($this->address2 !== null) {
                $data['address2'] = $this->address2;
            }
            if ($this->city !== null) {
                $data['city'] = $this->city;
            }
            if ($this->companyName !== null) {
                $data['companyName'] = $this->companyName;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->formattedAddress !== null) {
                $data['formattedAddress'] = $this->formattedAddress;
            }
            if ($this->formattedArea !== null) {
                $data['formattedArea'] = $this->formattedArea;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->province !== null) {
                $data['province'] = $this->province;
            }
            if ($this->recipient !== null) {
                $data['recipient'] = $this->recipient;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->zip !== null) {
                $data['zip'] = $this->zip;
            }
            if ($this->zoneCode !== null) {
                $data['zoneCode'] = $this->zoneCode;
            }
            return $data;
        }
}
