<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;
use Carbon\Carbon;

class LocationSnapshot
{
    protected $address;
    protected $location;
    protected $name;
    protected $snapshottedAt;

    
    /**
     * @return LocationAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    
    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return Carbon
     */
    public function getSnapshottedAt()
    {
        return $this->snapshottedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address']) && $data['address'] !== null) {
                $instance->address = LocationAddress::fromArray($data['address']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['snapshottedAt']) && $data['snapshottedAt'] !== null) {
                $instance->snapshottedAt = new Carbon($data['snapshottedAt']);
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
            if ($this->address !== null) {
                $data['address'] = $this->address->asArray();
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->snapshottedAt !== null) {
                $data['snapshottedAt'] = $this->snapshottedAt->toIso8601String();
            }
            return $data;
        }
}
