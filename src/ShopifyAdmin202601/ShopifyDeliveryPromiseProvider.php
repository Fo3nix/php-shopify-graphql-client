<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocation;

/**
 * A delivery promise provider. Currently restricted to select approved delivery promise partners.
 */
class ShopifyDeliveryPromiseProvider implements ShopifyNode
{
    protected $active;
    protected $fulfillmentDelay;
    protected $id;
    protected $location;
    protected $timeZone;

    
    /**
     * Whether the delivery promise provider is active. Defaults to `true` when creating a provider.
     *
     * @return bool
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    
    /**
     * The number of seconds to add to the current time as a buffer when looking up delivery promises. Represents how long the shop requires before releasing an order to the fulfillment provider.
     *
     * @return int
     */
    public function getFulfillmentDelay(): ?int
    {
        return $this->fulfillmentDelay;
    }

    
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
     * The location associated with this delivery promise provider.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The time zone to be used for interpreting day of week and cutoff times in delivery schedules when looking up delivery promises.
     *
     * @return string
     */
    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['active']) && $data['active'] !== null) {
                $instance->active = $data['active'];
            }
            if (isset($data['fulfillmentDelay']) && $data['fulfillmentDelay'] !== null) {
                $instance->fulfillmentDelay = $data['fulfillmentDelay'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['timeZone']) && $data['timeZone'] !== null) {
                $instance->timeZone = $data['timeZone'];
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
            if ($this->active !== null) {
                $data['active'] = $this->active;
            }
            if ($this->fulfillmentDelay !== null) {
                $data['fulfillmentDelay'] = $this->fulfillmentDelay;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->timeZone !== null) {
                $data['timeZone'] = $this->timeZone;
            }
            return $data;
        }
}
