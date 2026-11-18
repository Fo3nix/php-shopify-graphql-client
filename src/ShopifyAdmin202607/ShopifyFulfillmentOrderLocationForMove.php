<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;

/**
 * A location that a fulfillment order can potentially move to.
 */
class ShopifyFulfillmentOrderLocationForMove
{
    protected $availableLineItems;
    protected $availableLineItemsCount;
    protected $location;
    protected $message;
    protected $movable;
    protected $unavailableLineItems;
    protected $unavailableLineItemsCount;

    
    /**
     * Fulfillment order line items that can be moved from their current location to the given location.
     *
     * @return ShopifyFulfillmentOrderLineItemConnection
     */
    public function getAvailableLineItems(): ?ShopifyFulfillmentOrderLineItemConnection
    {
        return $this->availableLineItems;
    }

    
    /**
     * Total number of fulfillment order line items that can be moved from their current assigned location to the
     * given location.
     *
     * @return ShopifyCount
     */
    public function getAvailableLineItemsCount(): ?ShopifyCount
    {
        return $this->availableLineItemsCount;
    }

    
    /**
     * The location being considered as the fulfillment order's new assigned location.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * A human-readable string with the reason why the fulfillment order, or some of its line items, can't be
     * moved to the location.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * Whether the fulfillment order can be moved to the location.
     *
     * @return bool
     */
    public function getMovable(): ?bool
    {
        return $this->movable;
    }

    
    /**
     * Fulfillment order line items that cannot be moved from their current location to the given location.
     *
     * @return ShopifyFulfillmentOrderLineItemConnection
     */
    public function getUnavailableLineItems(): ?ShopifyFulfillmentOrderLineItemConnection
    {
        return $this->unavailableLineItems;
    }

    
    /**
     * Total number of fulfillment order line items that can't be moved from their current assigned location to the
     * given location.
     *
     * @return ShopifyCount
     */
    public function getUnavailableLineItemsCount(): ?ShopifyCount
    {
        return $this->unavailableLineItemsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['availableLineItems']) && $data['availableLineItems'] !== null) {
                $instance->availableLineItems = ShopifyFulfillmentOrderLineItemConnection::fromArray($data['availableLineItems']);
            }
            if (isset($data['availableLineItemsCount']) && $data['availableLineItemsCount'] !== null) {
                $instance->availableLineItemsCount = ShopifyCount::fromArray($data['availableLineItemsCount']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['movable']) && $data['movable'] !== null) {
                $instance->movable = $data['movable'];
            }
            if (isset($data['unavailableLineItems']) && $data['unavailableLineItems'] !== null) {
                $instance->unavailableLineItems = ShopifyFulfillmentOrderLineItemConnection::fromArray($data['unavailableLineItems']);
            }
            if (isset($data['unavailableLineItemsCount']) && $data['unavailableLineItemsCount'] !== null) {
                $instance->unavailableLineItemsCount = ShopifyCount::fromArray($data['unavailableLineItemsCount']);
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
            if ($this->availableLineItems !== null) {
                $data['availableLineItems'] = $this->availableLineItems->asArray();
            }
            if ($this->availableLineItemsCount !== null) {
                $data['availableLineItemsCount'] = $this->availableLineItemsCount->asArray();
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->movable !== null) {
                $data['movable'] = $this->movable;
            }
            if ($this->unavailableLineItems !== null) {
                $data['unavailableLineItems'] = $this->unavailableLineItems->asArray();
            }
            if ($this->unavailableLineItemsCount !== null) {
                $data['unavailableLineItemsCount'] = $this->unavailableLineItemsCount->asArray();
            }
            return $data;
        }
}
