<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AbandonedCheckoutLineItemComponent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountAllocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Product;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;

class AbandonedCheckoutLineItem
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
    protected $product;
    protected $quantity;
    protected $sku;
    protected $title;
    protected $variant;
    protected $variantTitle;

    
    /**
     * @return AbandonedCheckoutLineItemComponent[]
     */
    public function getComponents()
    {
        return $this->components;
    }

    
    /**
     * @return Attribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return DiscountAllocationConnection
     */
    public function getDiscountAllocations()
    {
        return $this->discountAllocations;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedTotalPriceSet()
    {
        return $this->discountedTotalPriceSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedTotalPriceWithCodeDiscount()
    {
        return $this->discountedTotalPriceWithCodeDiscount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedUnitPriceSet()
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedUnitPriceWithCodeDiscount()
    {
        return $this->discountedUnitPriceWithCodeDiscount;
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
     * @return MoneyBag
     */
    public function getOriginalTotalPriceSet()
    {
        return $this->originalTotalPriceSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalUnitPriceSet()
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['components']) && $data['components'] !== null) {
                $instance->components = array_map(function($item) { return AbandonedCheckoutLineItemComponent::fromArray($item); }, $data['components']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = DiscountAllocationConnection::fromArray($data['discountAllocations']);
            }
            if (isset($data['discountedTotalPriceSet']) && $data['discountedTotalPriceSet'] !== null) {
                $instance->discountedTotalPriceSet = MoneyBag::fromArray($data['discountedTotalPriceSet']);
            }
            if (isset($data['discountedTotalPriceWithCodeDiscount']) && $data['discountedTotalPriceWithCodeDiscount'] !== null) {
                $instance->discountedTotalPriceWithCodeDiscount = MoneyBag::fromArray($data['discountedTotalPriceWithCodeDiscount']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = MoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['discountedUnitPriceWithCodeDiscount']) && $data['discountedUnitPriceWithCodeDiscount'] !== null) {
                $instance->discountedUnitPriceWithCodeDiscount = MoneyBag::fromArray($data['discountedUnitPriceWithCodeDiscount']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['originalTotalPriceSet']) && $data['originalTotalPriceSet'] !== null) {
                $instance->originalTotalPriceSet = MoneyBag::fromArray($data['originalTotalPriceSet']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = MoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = Product::fromArray($data['product']);
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
                $instance->variant = ProductVariant::fromArray($data['variant']);
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
