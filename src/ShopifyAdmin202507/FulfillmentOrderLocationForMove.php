<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class FulfillmentOrderLocationForMove
{
    protected $availableLineItems;
    protected $availableLineItemsCount;
    protected $location;
    protected $message;
    protected $movable;
    protected $unavailableLineItems;
    protected $unavailableLineItemsCount;

    
    /**
     * @return FulfillmentOrderLineItemConnection
     */
    public function getAvailableLineItems()
    {
        return $this->availableLineItems;
    }

    
    /**
     * @return Count
     */
    public function getAvailableLineItemsCount()
    {
        return $this->availableLineItemsCount;
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
    public function getMessage()
    {
        return $this->message;
    }

    
    /**
     * @return bool
     */
    public function getMovable()
    {
        return $this->movable;
    }

    
    /**
     * @return FulfillmentOrderLineItemConnection
     */
    public function getUnavailableLineItems()
    {
        return $this->unavailableLineItems;
    }

    
    /**
     * @return Count
     */
    public function getUnavailableLineItemsCount()
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
                $instance->availableLineItems = FulfillmentOrderLineItemConnection::fromArray($data['availableLineItems']);
            }
            if (isset($data['availableLineItemsCount']) && $data['availableLineItemsCount'] !== null) {
                $instance->availableLineItemsCount = Count::fromArray($data['availableLineItemsCount']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['movable']) && $data['movable'] !== null) {
                $instance->movable = $data['movable'];
            }
            if (isset($data['unavailableLineItems']) && $data['unavailableLineItems'] !== null) {
                $instance->unavailableLineItems = FulfillmentOrderLineItemConnection::fromArray($data['unavailableLineItems']);
            }
            if (isset($data['unavailableLineItemsCount']) && $data['unavailableLineItemsCount'] !== null) {
                $instance->unavailableLineItemsCount = Count::fromArray($data['unavailableLineItemsCount']);
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
