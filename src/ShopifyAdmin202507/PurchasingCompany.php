<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Company;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyLocation;

class PurchasingCompany
{
    protected $company;
    protected $contact;
    protected $location;

    
    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    
    /**
     * @return CompanyContact
     */
    public function getContact()
    {
        return $this->contact;
    }

    
    /**
     * @return CompanyLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = Company::fromArray($data['company']);
            }
            if (isset($data['contact']) && $data['contact'] !== null) {
                $instance->contact = CompanyContact::fromArray($data['contact']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = CompanyLocation::fromArray($data['location']);
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
            if ($this->company !== null) {
                $data['company'] = $this->company->asArray();
            }
            if ($this->contact !== null) {
                $data['contact'] = $this->contact->asArray();
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            return $data;
        }
}
