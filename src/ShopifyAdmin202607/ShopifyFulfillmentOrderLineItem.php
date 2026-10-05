<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrderLineItemFinancialSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrderLineItemWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyWeight;

class ShopifyFulfillmentOrderLineItem
{
    protected $financialSummaries;
    protected $id;
    protected $image;
    protected $inventoryItemId;
    protected $lineItem;
    protected $originalUnitPriceSet;
    protected $productTitle;
    protected $remainingQuantity;
    protected $requiresShipping;
    protected $shippingLine;
    protected $sku;
    protected $totalQuantity;
    protected $variant;
    protected $variantTitle;
    protected $vendor;
    protected $warnings;
    protected $weight;

    
    /**
     * @return ShopifyFulfillmentOrderLineItemFinancialSummary[]
     */
    public function getFinancialSummaries()
    {
        return $this->financialSummaries;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyImage
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return string
     */
    public function getInventoryItemId()
    {
        return $this->inventoryItemId;
    }

    
    /**
     * @return ShopifyLineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet()
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * @return string
     */
    public function getProductTitle()
    {
        return $this->productTitle;
    }

    
    /**
     * @return int
     */
    public function getRemainingQuantity()
    {
        return $this->remainingQuantity;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->requiresShipping;
    }

    
    /**
     * @return ShopifyShippingLine
     */
    public function getShippingLine()
    {
        return $this->shippingLine;
    }

    
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    
    /**
     * @return ShopifyProductVariant
     */
    public function getVariant()
    {
        return $this->variant;
    }

    
    /**
     * @return string
     */
    public function getVariantTitle()
    {
        return $this->variantTitle;
    }

    
    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    
    /**
     * @return ShopifyFulfillmentOrderLineItemWarning[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    
    /**
     * @return ShopifyWeight
     */
    public function getWeight()
    {
        return $this->weight;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['financialSummaries']) && $data['financialSummaries'] !== null) {
                $instance->financialSummaries = array_map(function($item) { return ShopifyFulfillmentOrderLineItemFinancialSummary::fromArray($item); }, $data['financialSummaries']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['inventoryItemId']) && $data['inventoryItemId'] !== null) {
                $instance->inventoryItemId = $data['inventoryItemId'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = ShopifyLineItem::fromArray($data['lineItem']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['productTitle']) && $data['productTitle'] !== null) {
                $instance->productTitle = $data['productTitle'];
            }
            if (isset($data['remainingQuantity']) && $data['remainingQuantity'] !== null) {
                $instance->remainingQuantity = $data['remainingQuantity'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ShopifyProductVariant::fromArray($data['variant']);
            }
            if (isset($data['variantTitle']) && $data['variantTitle'] !== null) {
                $instance->variantTitle = $data['variantTitle'];
            }
            if (isset($data['vendor']) && $data['vendor'] !== null) {
                $instance->vendor = $data['vendor'];
            }
            if (isset($data['warnings']) && $data['warnings'] !== null) {
                $instance->warnings = array_map(function($item) { return ShopifyFulfillmentOrderLineItemWarning::fromArray($item); }, $data['warnings']);
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = ShopifyWeight::fromArray($data['weight']);
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
            if ($this->financialSummaries !== null) {
                $data['financialSummaries'] = array_map(function($item) { return $item->asArray(); }, $this->financialSummaries);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->inventoryItemId !== null) {
                $data['inventoryItemId'] = $this->inventoryItemId;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->productTitle !== null) {
                $data['productTitle'] = $this->productTitle;
            }
            if ($this->remainingQuantity !== null) {
                $data['remainingQuantity'] = $this->remainingQuantity;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            if ($this->variantTitle !== null) {
                $data['variantTitle'] = $this->variantTitle;
            }
            if ($this->vendor !== null) {
                $data['vendor'] = $this->vendor;
            }
            if ($this->warnings !== null) {
                $data['warnings'] = array_map(function($item) { return $item->asArray(); }, $this->warnings);
            }
            if ($this->weight !== null) {
                $data['weight'] = $this->weight->asArray();
            }
            return $data;
        }
}
