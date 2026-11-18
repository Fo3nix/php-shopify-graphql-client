<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The billing address of a payment instrument.
 */
class ShopifyCustomerPaymentInstrumentBillingAddress
{
    protected $address1;
    protected $city;
    protected $country;
    protected $countryCode;
    protected $name;
    protected $province;
    protected $provinceCode;
    protected $zip;

    
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
     * The name of the city, district, village, or town.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
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
     * The name of the buyer of the address.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
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
     * The alphanumeric code for the region.
     * For example, ON.
     *
     * @return string
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address1']) && $data['address1'] !== null) {
                $instance->address1 = $data['address1'];
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
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->city !== null) {
                $data['city'] = $this->city;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
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
