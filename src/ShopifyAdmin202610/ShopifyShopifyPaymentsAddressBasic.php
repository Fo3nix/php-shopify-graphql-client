<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A Shopify Payments address.
 */
class ShopifyShopifyPaymentsAddressBasic
{
    protected $addressLine1;
    protected $addressLine2;
    protected $city;
    protected $country;
    protected $postalCode;
    protected $zone;

    
    /**
     * Line 1 of the address.
     *
     * @return string
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    
    /**
     * Line 2 of the address.
     *
     * @return string
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    
    /**
     * The address city.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The address country.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The address postal code.
     *
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    
    /**
     * The address state/province/zone.
     *
     * @return string
     */
    public function getZone(): ?string
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
