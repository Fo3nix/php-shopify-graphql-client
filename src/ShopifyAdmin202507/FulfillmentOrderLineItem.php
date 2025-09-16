<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderLineItemFinancialSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrderLineItemWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Weight;

class FulfillmentOrderLineItem
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
    protected $sku;
    protected $totalQuantity;
    protected $variant;
    protected $variantTitle;
    protected $vendor;
    protected $warnings;
    protected $weight;

    
    /**
     * @return FulfillmentOrderLineItemFinancialSummary[]
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
     * @return Image
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
     * @return LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    
    /**
     * @return MoneyBag
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
     * @return ProductVariant
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
     * @return FulfillmentOrderLineItemWarning[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    
    /**
     * @return Weight
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
                $instance->financialSummaries = array_map(function($item) { return FulfillmentOrderLineItemFinancialSummary::fromArray($item); }, $data['financialSummaries']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['inventoryItemId']) && $data['inventoryItemId'] !== null) {
                $instance->inventoryItemId = $data['inventoryItemId'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = LineItem::fromArray($data['lineItem']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = MoneyBag::fromArray($data['originalUnitPriceSet']);
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
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ProductVariant::fromArray($data['variant']);
            }
            if (isset($data['variantTitle']) && $data['variantTitle'] !== null) {
                $instance->variantTitle = $data['variantTitle'];
            }
            if (isset($data['vendor']) && $data['vendor'] !== null) {
                $instance->vendor = $data['vendor'];
            }
            if (isset($data['warnings']) && $data['warnings'] !== null) {
                $instance->warnings = array_map(function($item) { return FulfillmentOrderLineItemWarning::fromArray($item); }, $data['warnings']);
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = Weight::fromArray($data['weight']);
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
