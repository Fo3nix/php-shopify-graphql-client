<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class DeliveryPromiseProvider
{
    protected $active;
    protected $fulfillmentDelay;
    protected $id;
    protected $location;
    protected $timeZone;

    
    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    
    /**
     * @return int
     */
    public function getFulfillmentDelay()
    {
        return $this->fulfillmentDelay;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
    public function getTimeZone()
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
                $instance->location = Location::fromArray($data['location']);
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
