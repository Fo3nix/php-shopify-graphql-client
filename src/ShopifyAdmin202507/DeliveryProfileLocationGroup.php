<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryCountryAndZone;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryLocationGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryLocationGroupZoneConnection;

class DeliveryProfileLocationGroup
{
    protected $countriesInAnyZone;
    protected $locationGroup;
    protected $locationGroupZones;

    
    /**
     * @return DeliveryCountryAndZone[]
     */
    public function getCountriesInAnyZone()
    {
        return $this->countriesInAnyZone;
    }

    
    /**
     * @return DeliveryLocationGroup
     */
    public function getLocationGroup()
    {
        return $this->locationGroup;
    }

    
    /**
     * @return DeliveryLocationGroupZoneConnection
     */
    public function getLocationGroupZones()
    {
        return $this->locationGroupZones;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['countriesInAnyZone']) && $data['countriesInAnyZone'] !== null) {
                $instance->countriesInAnyZone = array_map(function($item) { return DeliveryCountryAndZone::fromArray($item); }, $data['countriesInAnyZone']);
            }
            if (isset($data['locationGroup']) && $data['locationGroup'] !== null) {
                $instance->locationGroup = DeliveryLocationGroup::fromArray($data['locationGroup']);
            }
            if (isset($data['locationGroupZones']) && $data['locationGroupZones'] !== null) {
                $instance->locationGroupZones = DeliveryLocationGroupZoneConnection::fromArray($data['locationGroupZones']);
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
            if ($this->countriesInAnyZone !== null) {
                $data['countriesInAnyZone'] = array_map(function($item) { return $item->asArray(); }, $this->countriesInAnyZone);
            }
            if ($this->locationGroup !== null) {
                $data['locationGroup'] = $this->locationGroup->asArray();
            }
            if ($this->locationGroupZones !== null) {
                $data['locationGroupZones'] = $this->locationGroupZones->asArray();
            }
            return $data;
        }
}
