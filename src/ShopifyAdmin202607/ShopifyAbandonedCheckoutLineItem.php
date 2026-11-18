<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAbandonedCheckoutLineItemComponent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountAllocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAbandonedCheckoutLineItemParentRelationship;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariant;

/**
 * A single line item in an abandoned checkout.
 */
class ShopifyAbandonedCheckoutLineItem implements ShopifyNode
{
    protected $components;
    protected $customAttributes;
    protected $discountAllocations;
    protected $discountedTotalPriceSet;
    protected $discountedTotalPriceWithCodeDiscount;
    protected $discountedUnitPriceSet;
    protected $discountedUnitPriceWithCodeDiscount;
    protected $id;
    protected $image;
    protected $originalTotalPriceSet;
    protected $originalUnitPriceSet;
    protected $parentRelationship;
    protected $product;
    protected $quantity;
    protected $sku;
    protected $title;
    protected $variant;
    protected $variantTitle;

    
    /**
     * A list of line item components for this line item.
     *
     * @return ShopifyAbandonedCheckoutLineItemComponent[]
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    
    /**
     * A list of extra information that has been added to the line item.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * Discount allocations that have been applied on the line item.
     *
     * @return ShopifyDiscountAllocationConnection
     */
    public function getDiscountAllocations(): ?ShopifyDiscountAllocationConnection
    {
        return $this->discountAllocations;
    }

    
    /**
     * Final total price for the entire quantity of this line item, including discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->discountedTotalPriceSet;
    }

    
    /**
     * The total price for the entire quantity of this line item, after all discounts are applied, at both the line item and code-based line item level.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedTotalPriceWithCodeDiscount(): ?ShopifyMoneyBag
    {
        return $this->discountedTotalPriceWithCodeDiscount;
    }

    
    /**
     * The price of a single variant unit after discounts are applied at the line item level, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * The price of a single variant unit after all discounts are applied, at both the line item and code-based line item level.
     *
     * @return ShopifyMoneyBag
     */
    public function getDiscountedUnitPriceWithCodeDiscount(): ?ShopifyMoneyBag
    {
        return $this->discountedUnitPriceWithCodeDiscount;
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
     * The image associated with the line item's variant or product.
     * NULL if the line item has no product, or if neither the variant nor the product have an image.
     *
     * @return ShopifyImage
     */
    public function getImage(): ?ShopifyImage
    {
        return $this->image;
    }

    
    /**
     * Original total price for the entire quantity of this line item, before discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalTotalPriceSet;
    }

    
    /**
     * Original price for a single unit of this line item, before discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * The parent relationship for this line item.
     *
     * @return ShopifyAbandonedCheckoutLineItemParentRelationship
     */
    public function getParentRelationship(): ?ShopifyAbandonedCheckoutLineItemParentRelationship
    {
        return $this->parentRelationship;
    }

    
    /**
     * Product for this line item.
     * NULL for custom line items and products that were deleted after checkout began.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The quantity of the line item.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * SKU for the inventory item associated with the variant, if any.
     *
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    
    /**
     * Title of the line item. Defaults to the product's title.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * Product variant for this line item.
     * NULL for custom line items and variants that were deleted after checkout began.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

    
    /**
     * Title of the variant for this line item.
     * NULL for custom line items and products that don't have distinct variants.
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
            if (isset($data['components']) && $data['components'] !== null) {
                $instance->components = array_map(function($item) { return ShopifyAbandonedCheckoutLineItemComponent::fromArray($item); }, $data['components']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = ShopifyDiscountAllocationConnection::fromArray($data['discountAllocations']);
            }
            if (isset($data['discountedTotalPriceSet']) && $data['discountedTotalPriceSet'] !== null) {
                $instance->discountedTotalPriceSet = ShopifyMoneyBag::fromArray($data['discountedTotalPriceSet']);
            }
            if (isset($data['discountedTotalPriceWithCodeDiscount']) && $data['discountedTotalPriceWithCodeDiscount'] !== null) {
                $instance->discountedTotalPriceWithCodeDiscount = ShopifyMoneyBag::fromArray($data['discountedTotalPriceWithCodeDiscount']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['discountedUnitPriceWithCodeDiscount']) && $data['discountedUnitPriceWithCodeDiscount'] !== null) {
                $instance->discountedUnitPriceWithCodeDiscount = ShopifyMoneyBag::fromArray($data['discountedUnitPriceWithCodeDiscount']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = ShopifyImage::fromArray($data['image']);
            }
            if (isset($data['originalTotalPriceSet']) && $data['originalTotalPriceSet'] !== null) {
                $instance->originalTotalPriceSet = ShopifyMoneyBag::fromArray($data['originalTotalPriceSet']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['parentRelationship']) && $data['parentRelationship'] !== null) {
                $instance->parentRelationship = ShopifyAbandonedCheckoutLineItemParentRelationship::fromArray($data['parentRelationship']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->components !== null) {
                $data['components'] = array_map(function($item) { return $item->asArray(); }, $this->components);
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->discountAllocations !== null) {
                $data['discountAllocations'] = $this->discountAllocations->asArray();
            }
            if ($this->discountedTotalPriceSet !== null) {
                $data['discountedTotalPriceSet'] = $this->discountedTotalPriceSet->asArray();
            }
            if ($this->discountedTotalPriceWithCodeDiscount !== null) {
                $data['discountedTotalPriceWithCodeDiscount'] = $this->discountedTotalPriceWithCodeDiscount->asArray();
            }
            if ($this->discountedUnitPriceSet !== null) {
                $data['discountedUnitPriceSet'] = $this->discountedUnitPriceSet->asArray();
            }
            if ($this->discountedUnitPriceWithCodeDiscount !== null) {
                $data['discountedUnitPriceWithCodeDiscount'] = $this->discountedUnitPriceWithCodeDiscount->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->originalTotalPriceSet !== null) {
                $data['originalTotalPriceSet'] = $this->originalTotalPriceSet->asArray();
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->parentRelationship !== null) {
                $data['parentRelationship'] = $this->parentRelationship->asArray();
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
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
