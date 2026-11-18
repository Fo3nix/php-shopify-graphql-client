<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Represents a contact field for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestContactField
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $companyName;
    protected $countryCode;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $phone;
    protected $postalCode;
    protected $provinceCode;

    
    /**
     * The first address line of the contact field.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    
    /**
     * The second address line of the contact field.
     *
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    
    /**
     * The city of the contact field.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The company name of the contact field.
     *
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    
    /**
     * The country of the contact field.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The email of the contact field.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * The first name of the contact field.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * The last name of the contact field.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The phone number of the contact field.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The postal code of the contact field.
     *
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    
    /**
     * The province of the contact field.
     *
     * @return string
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
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
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['postalCode']) && $data['postalCode'] !== null) {
                $instance->postalCode = $data['postalCode'];
            }
            if (isset($data['provinceCode']) && $data['provinceCode'] !== null) {
                $instance->provinceCode = $data['provinceCode'];
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
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->postalCode !== null) {
                $data['postalCode'] = $this->postalCode;
            }
            if ($this->provinceCode !== null) {
                $data['provinceCode'] = $this->provinceCode;
            }
            return $data;
        }
}
