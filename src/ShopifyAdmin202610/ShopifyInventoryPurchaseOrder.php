<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationSnapshot;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryPurchaseOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventorySupplierSnapshot;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryTransferConnection;

/**
 * A purchase order represents an agreement from a merchant to buy goods or services from a supplier.
 * While the agreement is captured on the merchant's side as a purchase order, it’s recorded as a sales order
 * on the supplier side.
 */
class ShopifyInventoryPurchaseOrder implements ShopifyNode
{
    protected $archivedAt;
    protected $currency;
    protected $dateCreated;
    protected $destination;
    protected $id;
    protected $lineItems;
    protected $name;
    protected $orderedAt;
    protected $origin;
    protected $status;
    protected $transfers;

    
    /**
     * The date and time the purchase order was archived.
     *
     * @return Carbon
     */
    public function getArchivedAt(): ?Carbon
    {
        return $this->archivedAt;
    }

    
    /**
     * The currency for the purchase order's cost values.
     * The shop's currency will be used if one isn't provided during creation.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * The date and time the purchase order was placed.
     *
     * @return Carbon
     */
    public function getDateCreated(): ?Carbon
    {
        return $this->dateCreated;
    }

    
    /**
     * The target containing the destination location of the purchase order.
     *
     * @return ShopifyLocationSnapshot
     */
    public function getDestination(): ?ShopifyLocationSnapshot
    {
        return $this->destination;
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
     * A list of the purchase order's line items.
     *
     * @return ShopifyInventoryPurchaseOrderLineItemConnection
     */
    public function getLineItems(): ?ShopifyInventoryPurchaseOrderLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * The name of the purchase order.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The date and time the purchase order was confirmed with the supplier.
     *
     * @return Carbon
     */
    public function getOrderedAt(): ?Carbon
    {
        return $this->orderedAt;
    }

    
    /**
     * The supplier snapshot where the purchase order originates from.
     *
     * @return ShopifyInventorySupplierSnapshot
     */
    public function getOrigin(): ?ShopifyInventorySupplierSnapshot
    {
        return $this->origin;
    }

    
    /**
     * The current status of the inventory purchase order.
     *
     * @return string A ShopifyInventoryPurchaseOrderStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The inventory transfers linked to this purchase order.
     *
     * @return ShopifyInventoryTransferConnection
     */
    public function getTransfers(): ?ShopifyInventoryTransferConnection
    {
        return $this->transfers;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['archivedAt']) && $data['archivedAt'] !== null) {
                $instance->archivedAt = new Carbon($data['archivedAt']);
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['dateCreated']) && $data['dateCreated'] !== null) {
                $instance->dateCreated = new Carbon($data['dateCreated']);
            }
            if (isset($data['destination']) && $data['destination'] !== null) {
                $instance->destination = ShopifyLocationSnapshot::fromArray($data['destination']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyInventoryPurchaseOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['orderedAt']) && $data['orderedAt'] !== null) {
                $instance->orderedAt = new Carbon($data['orderedAt']);
            }
            if (isset($data['origin']) && $data['origin'] !== null) {
                $instance->origin = ShopifyInventorySupplierSnapshot::fromArray($data['origin']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['transfers']) && $data['transfers'] !== null) {
                $instance->transfers = ShopifyInventoryTransferConnection::fromArray($data['transfers']);
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
            if ($this->archivedAt !== null) {
                $data['archivedAt'] = $this->archivedAt->toIso8601String();
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->dateCreated !== null) {
                $data['dateCreated'] = $this->dateCreated->toIso8601String();
            }
            if ($this->destination !== null) {
                $data['destination'] = $this->destination->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->orderedAt !== null) {
                $data['orderedAt'] = $this->orderedAt->toIso8601String();
            }
            if ($this->origin !== null) {
                $data['origin'] = $this->origin->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->transfers !== null) {
                $data['transfers'] = $this->transfers->asArray();
            }
            return $data;
        }
}
