<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocationAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocation;
use Carbon\Carbon;

/**
 * A snapshot of location details including name and address captured at a specific point in time. Refer to the parent model to know the lifecycle.
 */
class ShopifyLocationSnapshot
{
    protected $address;
    protected $location;
    protected $name;
    protected $snapshottedAt;

    
    /**
     * The address details of the location as they were when the snapshot was recorded.
     *
     * @return ShopifyLocationAddress
     */
    public function getAddress(): ?ShopifyLocationAddress
    {
        return $this->address;
    }

    
    /**
     * A reference to the live Location object, if it still exists and is accessible. This provides current details of the location, which may differ from the snapshotted name and address.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The name of the location as it was when the snapshot was recorded.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The date and time when these snapshot details (name and address) were recorded.
     *
     * @return Carbon
     */
    public function getSnapshottedAt(): ?Carbon
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
                $instance->address = ShopifyLocationAddress::fromArray($data['address']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
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
