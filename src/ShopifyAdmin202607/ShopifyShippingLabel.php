<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingObjectsShippingDocument;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentTrackingInfo;

/**
 * The optional shipping label for this fulfillment.
 */
class ShopifyShippingLabel implements ShopifyNode
{
    protected $cancellable;
    protected $id;
    protected $location;
    protected $printed;
    protected $shippingDocuments;
    protected $trackingInfo;

    
    /**
     * Indicates whether the label is cancellable or not.
     *
     * @return bool
     */
    public function getCancellable(): ?bool
    {
        return $this->cancellable;
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
     * The location of the shipping origin. This will be null when the shipping origin is unknown.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * Indicates whether the label was printed or not.
     *
     * @return bool
     */
    public function getPrinted(): ?bool
    {
        return $this->printed;
    }

    
    /**
     * The documents for a shipping label.
     *
     * @return ShopifyShippingObjectsShippingDocument[]
     */
    public function getShippingDocuments(): ?array
    {
        return $this->shippingDocuments;
    }

    
    /**
     * Tracking information for the shipping label.
     *
     * @return ShopifyFulfillmentTrackingInfo
     */
    public function getTrackingInfo(): ?ShopifyFulfillmentTrackingInfo
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
