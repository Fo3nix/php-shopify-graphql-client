<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A physical mailing address. For example, a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s default address and an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order)'s billing address are both mailing addresses. Stores standard address components, customer name information, and company details.
 *
 * The address includes geographic coordinates ([`latitude`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress#field-MailingAddress.fields.latitude) and [`longitude`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress#field-MailingAddress.fields.longitude)). You can format addresses for display using the [`formatted`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress#field-MailingAddress.fields.formatted) field with options to include or exclude name and company information.
 */
class ShopifyMailingAddress implements ShopifyNode
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $company;
    protected $coordinatesValidated;
    protected $country;
    protected $countryCode;
    protected $countryCodeV2;
    protected $firstName;
    protected $formatted;
    protected $formattedArea;
    protected $id;
    protected $lastName;
    protected $latitude;
    protected $longitude;
    protected $name;
    protected $phone;
    protected $province;
    protected $provinceCode;
    protected $timeZone;
    protected $validationResultSummary;
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
     * The name of the customer's company or organization.
     *
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    
    /**
     * Whether the address corresponds to recognized latitude and longitude values.
     *
     * @return bool
     */
    public function getCoordinatesValidated(): ?bool
    {
        return $this->coordinatesValidated;
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
     *
     * For example, US.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The two-letter code for the country of the address.
     *
     * For example, US.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCodeV2(): ?string
    {
        return $this->countryCodeV2;
    }

    
    /**
     * The first name of the customer.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * A formatted version of the address, customized by the provided arguments.
     *
     * @return string[]
     */
    public function getFormatted(): ?array
    {
        return $this->formatted;
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
     * The last name of the customer.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The latitude coordinate of the customer address.
     *
     * @return float
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    
    /**
     * The longitude coordinate of the customer address.
     *
     * @return float
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    
    /**
     * The full name of the customer, based on firstName and lastName.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * A unique phone number for the customer.
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
     * The alphanumeric code for the region.
     *
     * For example, ON.
     *
     * @return string
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    
    /**
     * The time zone of the address.
     *
     * @return string
     */
    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    
    /**
     * The validation status that's leveraged by the address validation feature in the Shopify Admin.
     * See ["Validating addresses in your Shopify admin"](https://help.shopify.com/manual/fulfillment/managing-orders/validating-order-address) for more details.
     *
     * @return string A ShopifyMailingAddressValidationResultEnumObject value
     */
    public function getValidationResultSummary(): ?string
    {
        return $this->validationResultSummary;
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
            if (isset($data['address2']) && $data['address2'] !== null) {
                $instance->address2 = $data['address2'];
            }
            if (isset($data['city']) && $data['city'] !== null) {
                $instance->city = $data['city'];
            }
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = $data['company'];
            }
            if (isset($data['coordinatesValidated']) && $data['coordinatesValidated'] !== null) {
                $instance->coordinatesValidated = $data['coordinatesValidated'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['countryCodeV2']) && $data['countryCodeV2'] !== null) {
                $instance->countryCodeV2 = $data['countryCodeV2'];
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['formatted']) && $data['formatted'] !== null) {
                $instance->formatted = $data['formatted'];
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
            if (isset($data['latitude']) && $data['latitude'] !== null) {
                $instance->latitude = $data['latitude'];
            }
            if (isset($data['longitude']) && $data['longitude'] !== null) {
                $instance->longitude = $data['longitude'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if (isset($data['timeZone']) && $data['timeZone'] !== null) {
                $instance->timeZone = $data['timeZone'];
            }
            if (isset($data['validationResultSummary']) && $data['validationResultSummary'] !== null) {
                $instance->validationResultSummary = $data['validationResultSummary'];
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
            if ($this->coordinatesValidated !== null) {
                $data['coordinatesValidated'] = $this->coordinatesValidated;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->countryCodeV2 !== null) {
                $data['countryCodeV2'] = $this->countryCodeV2;
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->formatted !== null) {
                $data['formatted'] = $this->formatted;
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
            if ($this->latitude !== null) {
                $data['latitude'] = $this->latitude;
            }
            if ($this->longitude !== null) {
                $data['longitude'] = $this->longitude;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
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
            if ($this->timeZone !== null) {
                $data['timeZone'] = $this->timeZone;
            }
            if ($this->validationResultSummary !== null) {
                $data['validationResultSummary'] = $this->validationResultSummary;
            }
            if ($this->zip !== null) {
                $data['zip'] = $this->zip;
            }
            return $data;
        }
}
