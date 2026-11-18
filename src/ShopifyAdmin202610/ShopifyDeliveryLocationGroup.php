<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;

/**
 * A location group is a collection of locations. They share zones and delivery methods across delivery
 * profiles.
 */
class ShopifyDeliveryLocationGroup implements ShopifyNode
{
    protected $id;
    protected $locations;
    protected $locationsCount;

    
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
     * A list of all locations that are part of this location group.
     *
     * @return ShopifyLocationConnection
     */
    public function getLocations(): ?ShopifyLocationConnection
    {
        return $this->locations;
    }

    
    /**
     * A count of all locations that are part of this location group.
     *
     * @return ShopifyCount
     */
    public function getLocationsCount(): ?ShopifyCount
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
