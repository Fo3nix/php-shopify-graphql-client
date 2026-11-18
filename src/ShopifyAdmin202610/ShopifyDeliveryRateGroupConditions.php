<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationConnection;

/**
 * Conditions that limit a rate group to specific collections or origin locations.
 *
 * When conditions are set, the rate group applies only to matching shipments.
 */
class ShopifyDeliveryRateGroupConditions
{
    protected $collections;
    protected $collectionsCount;
    protected $originLocations;
    protected $originLocationsCount;

    
    /**
     * Collections this rate group applies to. Null means the rate group applies to all products.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

    
    /**
     * The number of collections this rate group applies to. Null when it applies to all products.
     *
     * @return ShopifyCount
     */
    public function getCollectionsCount(): ?ShopifyCount
    {
        return $this->collectionsCount;
    }

    
    /**
     * Origin locations this rate group applies to.
     *
     * @return ShopifyLocationConnection
     */
    public function getOriginLocations(): ?ShopifyLocationConnection
    {
        return $this->originLocations;
    }

    
    /**
     * The number of origin locations this rate group applies to.
     *
     * @return ShopifyCount
     */
    public function getOriginLocationsCount(): ?ShopifyCount
    {
        return $this->originLocationsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['collectionsCount']) && $data['collectionsCount'] !== null) {
                $instance->collectionsCount = ShopifyCount::fromArray($data['collectionsCount']);
            }
            if (isset($data['originLocations']) && $data['originLocations'] !== null) {
                $instance->originLocations = ShopifyLocationConnection::fromArray($data['originLocations']);
            }
            if (isset($data['originLocationsCount']) && $data['originLocationsCount'] !== null) {
                $instance->originLocationsCount = ShopifyCount::fromArray($data['originLocationsCount']);
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
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            if ($this->collectionsCount !== null) {
                $data['collectionsCount'] = $this->collectionsCount->asArray();
            }
            if ($this->originLocations !== null) {
                $data['originLocations'] = $this->originLocations->asArray();
            }
            if ($this->originLocationsCount !== null) {
                $data['originLocationsCount'] = $this->originLocationsCount->asArray();
            }
            return $data;
        }
}
