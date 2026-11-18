<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;

/**
 * Represents the destination where the items should be sent upon fulfillment.
 */
class ShopifyFulfillmentOrderDestination implements ShopifyNode
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $company;
    protected $countryCode;
    protected $email;
    protected $firstName;
    protected $id;
    protected $lastName;
    protected $location;
    protected $phone;
    protected $province;
    protected $zip;

    
    /**
     * The first line of the address of the destination.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    
    /**
     * The second line of the address of the destination.
     *
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    
    /**
     * The city of the destination.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The company of the destination.
     *
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    
    /**
     * The two-letter country code of the destination.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The email of the customer at the destination.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * The first name of the customer at the destination.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
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
     * The last name of the customer at the destination.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The location designated for the pick-up of the fulfillment order.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The phone number of the customer at the destination.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The province of the destination.
     *
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    
    /**
     * The ZIP code of the destination.
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
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = $data['company'];
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['province']) && $data['province'] !== null) {
                $instance->province = $data['province'];
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
            if ($this->company !== null) {
                $data['company'] = $this->company;
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->province !== null) {
                $data['province'] = $this->province;
            }
            if ($this->zip !== null) {
                $data['zip'] = $this->zip;
            }
            return $data;
        }
}
