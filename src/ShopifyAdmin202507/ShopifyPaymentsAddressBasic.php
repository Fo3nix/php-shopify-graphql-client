<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopifyPaymentsAddressBasic
{
    protected $addressLine1;
    protected $addressLine2;
    protected $city;
    protected $country;
    protected $postalCode;
    protected $zone;

    
    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    
    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
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
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    
    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['addressLine1']) && $data['addressLine1'] !== null) {
                $instance->addressLine1 = $data['addressLine1'];
            }
            if (isset($data['addressLine2']) && $data['addressLine2'] !== null) {
                $instance->addressLine2 = $data['addressLine2'];
            }
            if (isset($data['city']) && $data['city'] !== null) {
                $instance->city = $data['city'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['postalCode']) && $data['postalCode'] !== null) {
                $instance->postalCode = $data['postalCode'];
            }
            if (isset($data['zone']) && $data['zone'] !== null) {
                $instance->zone = $data['zone'];
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
            if ($this->addressLine1 !== null) {
                $data['addressLine1'] = $this->addressLine1;
            }
            if ($this->addressLine2 !== null) {
                $data['addressLine2'] = $this->addressLine2;
            }
            if ($this->city !== null) {
                $data['city'] = $this->city;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->postalCode !== null) {
                $data['postalCode'] = $this->postalCode;
            }
            if ($this->zone !== null) {
                $data['zone'] = $this->zone;
            }
            return $data;
        }
}
