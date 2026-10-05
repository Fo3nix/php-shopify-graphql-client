<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShippingObjectsShippingDocument;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentTrackingInfo;

class ShopifyShippingLabel
{
    protected $cancellable;
    protected $id;
    protected $location;
    protected $printed;
    protected $shippingDocuments;
    protected $trackingInfo;

    
    /**
     * @return bool
     */
    public function getCancellable()
    {
        return $this->cancellable;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return bool
     */
    public function getPrinted()
    {
        return $this->printed;
    }

    
    /**
     * @return ShopifyShippingObjectsShippingDocument[]
     */
    public function getShippingDocuments()
    {
        return $this->shippingDocuments;
    }

    
    /**
     * @return ShopifyFulfillmentTrackingInfo
     */
    public function getTrackingInfo()
    {
        return $this->trackingInfo;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cancellable']) && $data['cancellable'] !== null) {
                $instance->cancellable = $data['cancellable'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['printed']) && $data['printed'] !== null) {
                $instance->printed = $data['printed'];
            }
            if (isset($data['shippingDocuments']) && $data['shippingDocuments'] !== null) {
                $instance->shippingDocuments = array_map(function($item) { return ShopifyShippingObjectsShippingDocument::fromArray($item); }, $data['shippingDocuments']);
            }
            if (isset($data['trackingInfo']) && $data['trackingInfo'] !== null) {
                $instance->trackingInfo = ShopifyFulfillmentTrackingInfo::fromArray($data['trackingInfo']);
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
            if ($this->cancellable !== null) {
                $data['cancellable'] = $this->cancellable;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->printed !== null) {
                $data['printed'] = $this->printed;
            }
            if ($this->shippingDocuments !== null) {
                $data['shippingDocuments'] = array_map(function($item) { return $item->asArray(); }, $this->shippingDocuments);
            }
            if ($this->trackingInfo !== null) {
                $data['trackingInfo'] = $this->trackingInfo->asArray();
            }
            return $data;
        }
}
