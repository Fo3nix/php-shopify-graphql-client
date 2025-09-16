<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationConnection;

class LocationsCondition
{
    protected $applicationLevel;
    protected $locations;

    
    /**
     * @return MarketConditionApplicationTypeEnumObject
     */
    public function getApplicationLevel()
    {
        return $this->applicationLevel;
    }

    
    /**
     * @return LocationConnection
     */
    public function getLocations()
    {
        return $this->locations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['applicationLevel']) && $data['applicationLevel'] !== null) {
                $instance->applicationLevel = $data['applicationLevel'];
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = LocationConnection::fromArray($data['locations']);
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
            if ($this->applicationLevel !== null) {
                $data['applicationLevel'] = $this->applicationLevel;
            }
            if ($this->locations !== null) {
                $data['locations'] = $this->locations->asArray();
            }
            return $data;
        }
}
