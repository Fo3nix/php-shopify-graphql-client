<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCount;

class ShopifyDeliveryLocationGroup
{
    protected $id;
    protected $locations;
    protected $locationsCount;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyLocationConnection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getLocationsCount()
    {
        return $this->locationsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = ShopifyLocationConnection::fromArray($data['locations']);
            }
            if (isset($data['locationsCount']) && $data['locationsCount'] !== null) {
                $instance->locationsCount = ShopifyCount::fromArray($data['locationsCount']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->locations !== null) {
                $data['locations'] = $this->locations->asArray();
            }
            if ($this->locationsCount !== null) {
                $data['locationsCount'] = $this->locationsCount->asArray();
            }
            return $data;
        }
}
