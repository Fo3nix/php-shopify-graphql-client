<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCompany;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCompanyLocation;

class ShopifyPurchasingCompany
{
    protected $company;
    protected $contact;
    protected $location;

    
    /**
     * @return ShopifyCompany
     */
    public function getCompany()
    {
        return $this->company;
    }

    
    /**
     * @return ShopifyCompanyContact
     */
    public function getContact()
    {
        return $this->contact;
    }

    
    /**
     * @return ShopifyCompanyLocation
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
                $instance->company = ShopifyCompany::fromArray($data['company']);
            }
            if (isset($data['contact']) && $data['contact'] !== null) {
                $instance->contact = ShopifyCompanyContact::fromArray($data['contact']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyCompanyLocation::fromArray($data['location']);
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
