<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryCountryAndZone;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryLocationGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryLocationGroupZoneConnection;

class ShopifyDeliveryProfileLocationGroup
{
    protected $countriesInAnyZone;
    protected $locationGroup;
    protected $locationGroupZones;

    
    /**
     * @return ShopifyDeliveryCountryAndZone[]
     */
    public function getCountriesInAnyZone()
    {
        return $this->countriesInAnyZone;
    }

    
    /**
     * @return ShopifyDeliveryLocationGroup
     */
    public function getLocationGroup()
    {
        return $this->locationGroup;
    }

    
    /**
     * @return ShopifyDeliveryLocationGroupZoneConnection
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
                $instance->countriesInAnyZone = array_map(function($item) { return ShopifyDeliveryCountryAndZone::fromArray($item); }, $data['countriesInAnyZone']);
            }
            if (isset($data['locationGroup']) && $data['locationGroup'] !== null) {
                $instance->locationGroup = ShopifyDeliveryLocationGroup::fromArray($data['locationGroup']);
            }
            if (isset($data['locationGroupZones']) && $data['locationGroupZones'] !== null) {
                $instance->locationGroupZones = ShopifyDeliveryLocationGroupZoneConnection::fromArray($data['locationGroupZones']);
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
