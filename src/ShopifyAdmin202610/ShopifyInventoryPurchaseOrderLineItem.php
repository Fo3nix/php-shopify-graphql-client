<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryPurchaseOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * Represents a line item belonging to an inventory purchase order.
 * This is a simplified view of the purchase order line item for inventory management purposes.
 */
class ShopifyInventoryPurchaseOrderLineItem implements ShopifyNode
{
    protected $createdAt;
    protected $id;
    protected $inventoryItem;
    protected $purchaseOrder;
    protected $subtotal;
    protected $supplierSku;
    protected $taxPercent;
    protected $title;
    protected $totalCost;
    protected $totalQuantity;
    protected $unitCost;
    protected $variantTitle;

    
    /**
     * The date and time the purchase order line item was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A globally unique identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The inventory item associated with this line item.
     *
     * @return ShopifyInventoryItem
     */
    public function getInventoryItem(): ?ShopifyInventoryItem
    {
        return $this->inventoryItem;
    }

    
    /**
     * The purchase order this line item belongs to.
     *
     * @return ShopifyInventoryPurchaseOrder
     */
    public function getPurchaseOrder(): ?ShopifyInventoryPurchaseOrder
    {
        return $this->purchaseOrder;
    }

    
    /**
     * The unit cost multiplied by the total quantity for the line item.
     *
     * @return ShopifyMoneyV2
     */
    public function getSubtotal(): ?ShopifyMoneyV2
    {
        return $this->subtotal;
    }

    
    /**
     * The SKU for the item.
     *
     * @return string
     */
    public function getSupplierSku(): ?string
    {
        return $this->supplierSku;
    }

    
    /**
     * The tax rate percentage for the line item.
     *
     * @return string
     */
    public function getTaxPercent(): mixed
    {
        return $this->taxPercent;
    }

    
    /**
     * The title of the product associated with this line item.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The total cost of the line item, including taxes.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalCost(): ?ShopifyMoneyV2
    {
        return $this->totalCost;
    }

    
    /**
     * The total number of units ordered for the line item.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
    {
        return $this->totalQuantity;
    }

    
    /**
     * The unit cost of the item paid to the supplier.
     *
     * @return ShopifyMoneyV2
     */
    public function getUnitCost(): ?ShopifyMoneyV2
    {
        return $this->unitCost;
    }

    
    /**
     * The title of the variant associated with this line item.
     *
     * @return string
     */
    public function getVariantTitle(): ?string
    {
        return $this->variantTitle;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryItem']) && $data['inventoryItem'] !== null) {
                $instance->inventoryItem = ShopifyInventoryItem::fromArray($data['inventoryItem']);
            }
            if (isset($data['purchaseOrder']) && $data['purchaseOrder'] !== null) {
                $instance->purchaseOrder = ShopifyInventoryPurchaseOrder::fromArray($data['purchaseOrder']);
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = ShopifyMoneyV2::fromArray($data['subtotal']);
            }
            if (isset($data['supplierSku']) && $data['supplierSku'] !== null) {
                $instance->supplierSku = $data['supplierSku'];
            }
            if (isset($data['taxPercent']) && $data['taxPercent'] !== null) {
                $instance->taxPercent = $data['taxPercent'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalCost']) && $data['totalCost'] !== null) {
                $instance->totalCost = ShopifyMoneyV2::fromArray($data['totalCost']);
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
            }
            if (isset($data['unitCost']) && $data['unitCost'] !== null) {
                $instance->unitCost = ShopifyMoneyV2::fromArray($data['unitCost']);
            }
            if (isset($data['variantTitle']) && $data['variantTitle'] !== null) {
                $instance->variantTitle = $data['variantTitle'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryItem !== null) {
                $data['inventoryItem'] = $this->inventoryItem->asArray();
            }
            if ($this->purchaseOrder !== null) {
                $data['purchaseOrder'] = $this->purchaseOrder->asArray();
            }
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal->asArray();
            }
            if ($this->supplierSku !== null) {
                $data['supplierSku'] = $this->supplierSku;
            }
            if ($this->taxPercent !== null) {
                $data['taxPercent'] = $this->taxPercent;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalCost !== null) {
                $data['totalCost'] = $this->totalCost->asArray();
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            if ($this->unitCost !== null) {
                $data['unitCost'] = $this->unitCost->asArray();
            }
            if ($this->variantTitle !== null) {
                $data['variantTitle'] = $this->variantTitle;
            }
            return $data;
        }
}
