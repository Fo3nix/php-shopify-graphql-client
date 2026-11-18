<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderLineItemFinancialSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderLineItemWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyWeight;

/**
 * Associates an order line item with the quantities that require fulfillment as part of a fulfillment order. Each Fulfillment Order Line Item object tracks the total quantity to fulfill and the remaining quantity yet to be fulfilled, along with details about the line item being fulfilled and pricing information.
 *
 * The line item provides additional fulfillment data including whether the item requires shipping. Financial summaries show pricing details with discounts applied, while warning messages alert merchants to any issues that might affect fulfillment.
 */
class ShopifyFulfillmentOrderLineItem implements ShopifyNode
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
     * The financial summary for the Fulfillment Order's Line Items.
     *
     * @return ShopifyFulfillmentOrderLineItemFinancialSummary[]
     */
    public function getFinancialSummaries(): ?array
    {
        return $this->financialSummaries;
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
     * The image associated to the line item's variant.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * The ID of the inventory item.
     *
     * @return string
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }

    
    /**
     * The associated order line item.
     *
     * @return ShopifyLineItem
     */
    public function getLineItem(): ?ShopifyLineItem
    {
        return $this->lineItem;
    }

    
    /**
     * The variant unit price without discounts applied, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * The title of the product.
     *
     * @return string
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    
    /**
     * The number of units remaining to be fulfilled.
     *
     * @return int
     */
    public function getRemainingQuantity(): ?int
    {
        return $this->remainingQuantity;
    }

    
    /**
     * Whether physical shipping is required for the variant.
     *
     * @return bool
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    
    /**
     * The variant SKU number.
     *
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    
    /**
     * The total number of units to be fulfilled.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
    {
        return $this->totalQuantity;
    }

    
    /**
     * The product variant associated to the fulfillment order line item.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

    
    /**
     * The name of the variant.
     *
     * @return string
     */
    public function getVariantTitle(): ?string
    {
        return $this->variantTitle;
    }

    
    /**
     * The name of the vendor who made the variant.
     *
     * @return string
     */
    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    
    /**
     * Warning messages for a fulfillment order line item.
     *
     * @return ShopifyFulfillmentOrderLineItemWarning[]
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    
    /**
     * The weight of a line item unit.
     *
     * @return ShopifyWeight
     */
    public function getWeight(): ?ShopifyWeight
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
