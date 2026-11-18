<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocationSnapshot;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryTransferLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyInventoryShipmentConnection;

/**
 * Tracks the movement of [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) objects between [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects. A transfer includes origin and destination information, [`InventoryTransferLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem) objects with quantities, and shipment details.
 *
 * Transfers progress through multiple [`statuses`](https://shopify.dev/docs/api/admin-graphql/latest/enums/InventoryTransferStatus). The transfer maintains [`LocationSnapshot`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LocationSnapshot) objects of location details to preserve historical data even if locations change or are deleted later.
 */
class ShopifyInventoryTransfer implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyNode
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
     * The date and time the inventory transfer was created in UTC format.
     *
     * @return Carbon
     */
    public function getDateCreated(): ?Carbon
    {
        return $this->dateCreated;
    }

    
    /**
     * Snapshot of the destination location (name, address, when snapped) with an optional link to the live Location object. If the original location is deleted, the snapshot data will still be available but the location link will be nil.
     *
     * @return ShopifyLocationSnapshot
     */
    public function getDestination(): ?ShopifyLocationSnapshot
    {
        return $this->destination;
    }

    
    /**
     * The list of events associated with the inventory transfer.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * Whether the merchant has added timeline comments to the inventory transfer.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
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
     * The line items associated with the inventory transfer.
     *
     * @return ShopifyInventoryTransferLineItemConnection
     */
    public function getLineItems(): ?ShopifyInventoryTransferLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * The number of line items associated with the inventory transfer. Limited to a maximum of 10000 by default.
     *
     * @return ShopifyCount
     */
    public function getLineItemsCount(): ?ShopifyCount
    {
        return $this->lineItemsCount;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The name of the inventory transfer.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Additional note attached to the inventory transfer.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * Snapshot of the origin location (name, address, when snapped) with an optional link to the live Location object. If the original location is deleted, the snapshot data will still be available but the location link will be nil.
     *
     * @return ShopifyLocationSnapshot
     */
    public function getOrigin(): ?ShopifyLocationSnapshot
    {
        return $this->origin;
    }

    
    /**
     * The total quantity of items accepted, rejected, or marked as canceled in the transfer.
     *
     * @return int
     */
    public function getReceivedQuantity(): ?int
    {
        return $this->receivedQuantity;
    }

    
    /**
     * The reference name of the inventory transfer.
     *
     * @return string
     */
    public function getReferenceName(): ?string
    {
        return $this->referenceName;
    }

    
    /**
     * The shipments associated with the inventory transfer.
     *
     * @return ShopifyInventoryShipmentConnection
     */
    public function getShipments(): ?ShopifyInventoryShipmentConnection
    {
        return $this->shipments;
    }

    
    /**
     * The current status of the transfer.
     *
     * @return string A ShopifyInventoryTransferStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * A list of tags that have been added to the inventory transfer.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * The total quantity of items being transferred.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
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
                $instance->destination = ShopifyLocationSnapshot::fromArray($data['destination']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyInventoryTransferLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsCount']) && $data['lineItemsCount'] !== null) {
                $instance->lineItemsCount = ShopifyCount::fromArray($data['lineItemsCount']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['origin']) && $data['origin'] !== null) {
                $instance->origin = ShopifyLocationSnapshot::fromArray($data['origin']);
            }
            if (isset($data['receivedQuantity']) && $data['receivedQuantity'] !== null) {
                $instance->receivedQuantity = $data['receivedQuantity'];
            }
            if (isset($data['referenceName']) && $data['referenceName'] !== null) {
                $instance->referenceName = $data['referenceName'];
            }
            if (isset($data['shipments']) && $data['shipments'] !== null) {
                $instance->shipments = ShopifyInventoryShipmentConnection::fromArray($data['shipments']);
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
