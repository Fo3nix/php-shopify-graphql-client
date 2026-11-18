<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Represents the address of a location.
 */
class ShopifyLocationAddress
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $country;
    protected $countryCode;
    protected $formatted;
    protected $latitude;
    protected $longitude;
    protected $phone;
    protected $province;
    protected $provinceCode;
    protected $zip;

    
    /**
     * The first line of the address for the location.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    
    /**
     * The second line of the address for the location.
     *
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    
    /**
     * The city of the location.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The country of the location.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The country code of the location.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * A formatted version of the address for the location.
     *
     * @return string[]
     */
    public function getFormatted(): ?array
    {
        return $this->formatted;
    }

    
    /**
     * The approximate latitude coordinates of the location.
     *
     * @return float
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    
    /**
     * The approximate longitude coordinates of the location.
     *
     * @return float
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    
    /**
     * The phone number of the location.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The province of the location.
     *
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    
    /**
     * The code for the province, state, or district of the address of the location.
     *
     * @return string
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    
    /**
     * The ZIP code of the location.
     *
     * @return string
     */
    public function getZip(): ?string
    {
        return $this->zip;
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
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['formatted']) && $data['formatted'] !== null) {
                $instance->formatted = $data['formatted'];
            }
            if (isset($data['latitude']) && $data['latitude'] !== null) {
                $instance->latitude = $data['latitude'];
            }
            if (isset($data['longitude']) && $data['longitude'] !== null) {
                $instance->longitude = $data['longitude'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['province']) && $data['province'] !== null) {
                $instance->province = $data['province'];
            }
            if (isset($data['provinceCode']) && $data['provinceCode'] !== null) {
                $instance->provinceCode = $data['provinceCode'];
            }
            if (isset($data['zip']) && $data['zip'] !== null) {
                $instance->zip = $data['zip'];
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
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->formatted !== null) {
                $data['formatted'] = $this->formatted;
            }
            if ($this->latitude !== null) {
                $data['latitude'] = $this->latitude;
            }
            if ($this->longitude !== null) {
                $data['longitude'] = $this->longitude;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->province !== null) {
                $data['province'] = $this->province;
            }
            if ($this->provinceCode !== null) {
                $data['provinceCode'] = $this->provinceCode;
            }
            if ($this->zip !== null) {
                $data['zip'] = $this->zip;
            }
            return $data;
        }
}
