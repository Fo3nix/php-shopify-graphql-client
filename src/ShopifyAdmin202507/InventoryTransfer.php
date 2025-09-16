<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationSnapshot;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryTransferLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryShipmentConnection;

class InventoryTransfer
{
    protected $dateCreated;
    protected $destination;
    protected $events;
    protected $hasTimelineComment;
    protected $id;
    protected $lineItems;
    protected $lineItemsCount;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $note;
    protected $origin;
    protected $receivedQuantity;
    protected $referenceName;
    protected $shipments;
    protected $status;
    protected $tags;
    protected $totalQuantity;

    
    /**
     * @return Carbon
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    
    /**
     * @return LocationSnapshot
     */
    public function getDestination()
    {
        return $this->destination;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return bool
     */
    public function getHasTimelineComment()
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return InventoryTransferLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return Count
     */
    public function getLineItemsCount()
    {
        return $this->lineItemsCount;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return LocationSnapshot
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    
    /**
     * @return int
     */
    public function getReceivedQuantity()
    {
        return $this->receivedQuantity;
    }

    
    /**
     * @return string
     */
    public function getReferenceName()
    {
        return $this->referenceName;
    }

    
    /**
     * @return InventoryShipmentConnection
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    
    /**
     * @return InventoryTransferStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['dateCreated']) && $data['dateCreated'] !== null) {
                $instance->dateCreated = new Carbon($data['dateCreated']);
            }
            if (isset($data['destination']) && $data['destination'] !== null) {
                $instance->destination = LocationSnapshot::fromArray($data['destination']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = InventoryTransferLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsCount']) && $data['lineItemsCount'] !== null) {
                $instance->lineItemsCount = Count::fromArray($data['lineItemsCount']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['origin']) && $data['origin'] !== null) {
                $instance->origin = LocationSnapshot::fromArray($data['origin']);
            }
            if (isset($data['receivedQuantity']) && $data['receivedQuantity'] !== null) {
                $instance->receivedQuantity = $data['receivedQuantity'];
            }
            if (isset($data['referenceName']) && $data['referenceName'] !== null) {
                $instance->referenceName = $data['referenceName'];
            }
            if (isset($data['shipments']) && $data['shipments'] !== null) {
                $instance->shipments = InventoryShipmentConnection::fromArray($data['shipments']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
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
            if ($this->dateCreated !== null) {
                $data['dateCreated'] = $this->dateCreated->toIso8601String();
            }
            if ($this->destination !== null) {
                $data['destination'] = $this->destination->asArray();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->lineItemsCount !== null) {
                $data['lineItemsCount'] = $this->lineItemsCount->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->origin !== null) {
                $data['origin'] = $this->origin->asArray();
            }
            if ($this->receivedQuantity !== null) {
                $data['receivedQuantity'] = $this->receivedQuantity;
            }
            if ($this->referenceName !== null) {
                $data['referenceName'] = $this->referenceName;
            }
            if ($this->shipments !== null) {
                $data['shipments'] = $this->shipments->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            return $data;
        }
}
