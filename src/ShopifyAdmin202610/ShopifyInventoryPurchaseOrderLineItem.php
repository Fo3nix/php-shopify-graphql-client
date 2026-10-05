<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryPurchaseOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

class ShopifyInventoryPurchaseOrderLineItem
{
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyInventoryItem
     */
    public function getInventoryItem()
    {
        return $this->inventoryItem;
    }

    
    /**
     * @return ShopifyInventoryPurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->purchaseOrder;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return string
     */
    public function getSupplierSku()
    {
        return $this->supplierSku;
    }

    
    /**
     * @return string
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    
    /**
     * @return string
     */
    public function getVariantTitle()
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
