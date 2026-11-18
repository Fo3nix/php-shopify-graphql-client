<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompany;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyContact;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyLocation;

/**
 * Represents information about the purchasing company for the order or draft order.
 */
class ShopifyPurchasingCompany
{
    protected $company;
    protected $contact;
    protected $location;

    
    /**
     * The company associated to the order or draft order.
     *
     * @return ShopifyCompany
     */
    public function getCompany(): ?ShopifyCompany
    {
        return $this->company;
    }

    
    /**
     * The company contact associated to the order or draft order.
     *
     * @return ShopifyCompanyContact
     */
    public function getContact(): ?ShopifyCompanyContact
    {
        return $this->contact;
    }

    
    /**
     * The company location associated to the order or draft order.
     *
     * @return ShopifyCompanyLocation
     */
    public function getLocation(): ?ShopifyCompanyLocation
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
