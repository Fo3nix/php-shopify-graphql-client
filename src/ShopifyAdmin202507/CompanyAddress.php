<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class CompanyAddress
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
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    
    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    
    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    
    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    
    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return CountryCodeEnumObject
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    /**
     * @return string[]
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    
    /**
     * @return string
     */
    public function getFormattedArea()
    {
        return $this->formattedArea;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    
    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    
    /**
     * @return string
     */
    public function getZoneCode()
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
