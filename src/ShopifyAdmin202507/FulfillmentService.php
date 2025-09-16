<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class FulfillmentService
{
    protected $callbackUrl;
    protected $fulfillmentOrdersOptIn;
    protected $handle;
    protected $id;
    protected $inventoryManagement;
    protected $location;
    protected $permitsSkuSharing;
    protected $requiresShippingMethod;
    protected $serviceName;
    protected $trackingSupport;
    protected $type;

    
    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    
    /**
     * @return bool
     */
    public function getFulfillmentOrdersOptIn()
    {
        return $this->fulfillmentOrdersOptIn;
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
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getInventoryManagement()
    {
        return $this->inventoryManagement;
    }

    
    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return bool
     */
    public function getPermitsSkuSharing()
    {
        return $this->permitsSkuSharing;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShippingMethod()
    {
        return $this->requiresShippingMethod;
    }

    
    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    
    /**
     * @return bool
     */
    public function getTrackingSupport()
    {
        return $this->trackingSupport;
    }

    
    /**
     * @return FulfillmentServiceTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
            }
            if (isset($data['fulfillmentOrdersOptIn']) && $data['fulfillmentOrdersOptIn'] !== null) {
                $instance->fulfillmentOrdersOptIn = $data['fulfillmentOrdersOptIn'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryManagement']) && $data['inventoryManagement'] !== null) {
                $instance->inventoryManagement = $data['inventoryManagement'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['permitsSkuSharing']) && $data['permitsSkuSharing'] !== null) {
                $instance->permitsSkuSharing = $data['permitsSkuSharing'];
            }
            if (isset($data['requiresShippingMethod']) && $data['requiresShippingMethod'] !== null) {
                $instance->requiresShippingMethod = $data['requiresShippingMethod'];
            }
            if (isset($data['serviceName']) && $data['serviceName'] !== null) {
                $instance->serviceName = $data['serviceName'];
            }
            if (isset($data['trackingSupport']) && $data['trackingSupport'] !== null) {
                $instance->trackingSupport = $data['trackingSupport'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->callbackUrl !== null) {
                $data['callbackUrl'] = $this->callbackUrl;
            }
            if ($this->fulfillmentOrdersOptIn !== null) {
                $data['fulfillmentOrdersOptIn'] = $this->fulfillmentOrdersOptIn;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryManagement !== null) {
                $data['inventoryManagement'] = $this->inventoryManagement;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->permitsSkuSharing !== null) {
                $data['permitsSkuSharing'] = $this->permitsSkuSharing;
            }
            if ($this->requiresShippingMethod !== null) {
                $data['requiresShippingMethod'] = $this->requiresShippingMethod;
            }
            if ($this->serviceName !== null) {
                $data['serviceName'] = $this->serviceName;
            }
            if ($this->trackingSupport !== null) {
                $data['trackingSupport'] = $this->trackingSupport;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
