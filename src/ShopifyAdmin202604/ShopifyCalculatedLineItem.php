<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCalculatedDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderStagedChangeHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariant;

/**
 * A line item involved in order editing that may be newly added or have new changes applied.
 */
class ShopifyCalculatedLineItem
{
    protected $calculatedDiscountAllocations;
    protected $customAttributes;
    protected $discountAllocations;
    protected $discountedUnitPriceSet;
    protected $editableQuantity;
    protected $editableQuantityBeforeChanges;
    protected $editableSubtotalSet;
    protected $hasStagedLineItemDiscount;
    protected $id;
    protected $image;
    protected $originalUnitPriceSet;
    protected $quantity;
    protected $restockable;
    protected $restocking;
    protected $sku;
    protected $stagedChanges;
    protected $title;
    protected $uneditableSubtotalSet;
    protected $variant;
    protected $variantTitle;

    
    /**
     * The discounts that have been allocated onto the line item by discount applications.
     *
     * @return ShopifyCalculatedDiscountAllocation[]
     */
    public function getCalculatedDiscountAllocations(): ?array
    {
        return $this->calculatedDiscountAllocations;
    }

    
    /**
     * A list of attributes that represent custom features or special requests.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The discounts that have been allocated onto the line item by discount applications.
     *
     * @return ShopifyDiscountAllocation[]
     */
    public function getDiscountAllocations(): ?array
    {
        return $this->discountAllocations;
    }

    
    /**
     * The price of a single quantity of the line item with line item discounts applied, in shop and presentment currencies. Discounts applied to the entire order aren't included in this price.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * The total number of items that can be edited.
     *
     * @return int
     */
    public function getEditableQuantity(): ?int
    {
        return $this->editableQuantity;
    }

    
    /**
     * The editable quantity prior to any changes made in the current edit.
     *
     * @return int
     */
    public function getEditableQuantityBeforeChanges(): ?int
    {
        return $this->editableQuantityBeforeChanges;
    }

    
    /**
     * The total price of editable lines in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditableSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->editableSubtotalSet;
    }

    
    /**
     * Whether the calculated line item has a staged discount.
     *
     * @return bool
     */
    public function getHasStagedLineItemDiscount(): ?bool
    {
        return $this->hasStagedLineItemDiscount;
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
     * The image object associated to the line item's variant.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * The variant unit price in shop and presentment currencies, without any discounts applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * The total number of items.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * Whether the line item can be restocked or not.
     *
     * @return bool
     */
    public function getRestockable(): ?bool
    {
        return $this->restockable;
    }

    
    /**
     * Whether the changes on the line item will result in a restock.
     *
     * @return bool
     */
    public function getRestocking(): ?bool
    {
        return $this->restocking;
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
     * A list of changes that affect this line item.
     *
     * @return (ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine)[]
     */
    public function getStagedChanges(): ?array
    {
        return $this->stagedChanges;
    }

    
    /**
     * The title of the product.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The total price of uneditable lines in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getUneditableSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->uneditableSubtotalSet;
    }

    
    /**
     * The product variant associated with this line item. The value is null for custom line items and items where
     * the variant has been deleted.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

    
    /**
     * The title of the variant.
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
            if (isset($data['calculatedDiscountAllocations']) && $data['calculatedDiscountAllocations'] !== null) {
                $instance->calculatedDiscountAllocations = array_map(function($item) { return ShopifyCalculatedDiscountAllocation::fromArray($item); }, $data['calculatedDiscountAllocations']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return ShopifyDiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['editableQuantity']) && $data['editableQuantity'] !== null) {
                $instance->editableQuantity = $data['editableQuantity'];
            }
            if (isset($data['editableQuantityBeforeChanges']) && $data['editableQuantityBeforeChanges'] !== null) {
                $instance->editableQuantityBeforeChanges = $data['editableQuantityBeforeChanges'];
            }
            if (isset($data['editableSubtotalSet']) && $data['editableSubtotalSet'] !== null) {
                $instance->editableSubtotalSet = ShopifyMoneyBag::fromArray($data['editableSubtotalSet']);
            }
            if (isset($data['hasStagedLineItemDiscount']) && $data['hasStagedLineItemDiscount'] !== null) {
                $instance->hasStagedLineItemDiscount = $data['hasStagedLineItemDiscount'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['restockable']) && $data['restockable'] !== null) {
                $instance->restockable = $data['restockable'];
            }
            if (isset($data['restocking']) && $data['restocking'] !== null) {
                $instance->restocking = $data['restocking'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['stagedChanges']) && $data['stagedChanges'] !== null) {
                $instance->stagedChanges = array_map(function($item) { return ShopifyOrderStagedChangeHydrator::fromArray($item); }, $data['stagedChanges']);
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['uneditableSubtotalSet']) && $data['uneditableSubtotalSet'] !== null) {
                $instance->uneditableSubtotalSet = ShopifyMoneyBag::fromArray($data['uneditableSubtotalSet']);
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ShopifyProductVariant::fromArray($data['variant']);
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
            if ($this->calculatedDiscountAllocations !== null) {
                $data['calculatedDiscountAllocations'] = array_map(function($item) { return $item->asArray(); }, $this->calculatedDiscountAllocations);
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->discountAllocations !== null) {
                $data['discountAllocations'] = array_map(function($item) { return $item->asArray(); }, $this->discountAllocations);
            }
            if ($this->discountedUnitPriceSet !== null) {
                $data['discountedUnitPriceSet'] = $this->discountedUnitPriceSet->asArray();
            }
            if ($this->editableQuantity !== null) {
                $data['editableQuantity'] = $this->editableQuantity;
            }
            if ($this->editableQuantityBeforeChanges !== null) {
                $data['editableQuantityBeforeChanges'] = $this->editableQuantityBeforeChanges;
            }
            if ($this->editableSubtotalSet !== null) {
                $data['editableSubtotalSet'] = $this->editableSubtotalSet->asArray();
            }
            if ($this->hasStagedLineItemDiscount !== null) {
                $data['hasStagedLineItemDiscount'] = $this->hasStagedLineItemDiscount;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->restockable !== null) {
                $data['restockable'] = $this->restockable;
            }
            if ($this->restocking !== null) {
                $data['restocking'] = $this->restocking;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->stagedChanges !== null) {
                $data['stagedChanges'] = array_map(function($item) { return ShopifyOrderStagedChangeHydrator::toArray($item); }, $this->stagedChanges);
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->uneditableSubtotalSet !== null) {
                $data['uneditableSubtotalSet'] = $this->uneditableSubtotalSet->asArray();
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            if ($this->variantTitle !== null) {
                $data['variantTitle'] = $this->variantTitle;
            }
            return $data;
        }
}
