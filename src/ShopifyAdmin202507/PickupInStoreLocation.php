<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Distance;

class PickupInStoreLocation
{
    protected $code;
    protected $distanceFromBuyer;
    protected $handle;
    protected $instructions;
    protected $locationId;
    protected $source;
    protected $title;

    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return Distance
     */
    public function getDistanceFromBuyer()
    {
        return $this->distanceFromBuyer;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    
    /**
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['distanceFromBuyer']) && $data['distanceFromBuyer'] !== null) {
                $instance->distanceFromBuyer = Distance::fromArray($data['distanceFromBuyer']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['instructions']) && $data['instructions'] !== null) {
                $instance->instructions = $data['instructions'];
            }
            if (isset($data['locationId']) && $data['locationId'] !== null) {
                $instance->locationId = $data['locationId'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->distanceFromBuyer !== null) {
                $data['distanceFromBuyer'] = $this->distanceFromBuyer->asArray();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->instructions !== null) {
                $data['instructions'] = $this->instructions;
            }
            if ($this->locationId !== null) {
                $data['locationId'] = $this->locationId;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
