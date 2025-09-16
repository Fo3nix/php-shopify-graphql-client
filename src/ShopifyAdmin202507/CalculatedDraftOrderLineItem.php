<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderAppliedDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CalculatedDraftOrderLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TypedAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Product;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Weight;

class CalculatedDraftOrderLineItem
{
    protected $appliedDiscount;
    protected $approximateDiscountedUnitPriceSet;
    protected $bundleComponents;
    protected $components;
    protected $custom;
    protected $customAttributes;
    protected $customAttributesV2;
    protected $discountedTotal;
    protected $discountedTotalSet;
    protected $discountedUnitPrice;
    protected $discountedUnitPriceSet;
    protected $fulfillmentService;
    protected $image;
    protected $isGiftCard;
    protected $name;
    protected $originalTotal;
    protected $originalTotalSet;
    protected $originalUnitPrice;
    protected $originalUnitPriceSet;
    protected $originalUnitPriceWithCurrency;
    protected $priceOverride;
    protected $product;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;
    protected $taxable;
    protected $title;
    protected $totalDiscount;
    protected $totalDiscountSet;
    protected $uuid;
    protected $variant;
    protected $variantTitle;
    protected $vendor;
    protected $weight;

    
    /**
     * @return DraftOrderAppliedDiscount
     */
    public function getAppliedDiscount()
    {
        return $this->appliedDiscount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getApproximateDiscountedUnitPriceSet()
    {
        return $this->approximateDiscountedUnitPriceSet;
    }

    
    /**
     * @return CalculatedDraftOrderLineItem[]
     */
    public function getBundleComponents()
    {
        return $this->bundleComponents;
    }

    
    /**
     * @return CalculatedDraftOrderLineItem[]
     */
    public function getComponents()
    {
        return $this->components;
    }

    
    /**
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    
    /**
     * @return Attribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return TypedAttribute[]
     */
    public function getCustomAttributesV2()
    {
        return $this->customAttributesV2;
    }

    
    /**
     * @return MoneyV2
     */
    public function getDiscountedTotal()
    {
        return $this->discountedTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedTotalSet()
    {
        return $this->discountedTotalSet;
    }

    
    /**
     * @return MoneyV2
     */
    public function getDiscountedUnitPrice()
    {
        return $this->discountedUnitPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedUnitPriceSet()
    {
        return $this->discountedUnitPriceSet;
    }

    
    /**
     * @return FulfillmentService
     */
    public function getFulfillmentService()
    {
        return $this->fulfillmentService;
    }

    
    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    
    /**
     * @return bool
     */
    public function getIsGiftCard()
    {
        return $this->isGiftCard;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalTotal()
    {
        return $this->originalTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalTotalSet()
    {
        return $this->originalTotalSet;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalUnitPrice()
    {
        return $this->originalUnitPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalUnitPriceSet()
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalUnitPriceWithCurrency()
    {
        return $this->originalUnitPriceWithCurrency;
    }

    
    /**
     * @return MoneyV2
     */
    public function getPriceOverride()
    {
        return $this->priceOverride;
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
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return MoneyV2
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalDiscountSet()
    {
        return $this->totalDiscountSet;
    }

    
    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
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
            if (isset($data['appliedDiscount']) && $data['appliedDiscount'] !== null) {
                $instance->appliedDiscount = DraftOrderAppliedDiscount::fromArray($data['appliedDiscount']);
            }
            if (isset($data['approximateDiscountedUnitPriceSet']) && $data['approximateDiscountedUnitPriceSet'] !== null) {
                $instance->approximateDiscountedUnitPriceSet = MoneyBag::fromArray($data['approximateDiscountedUnitPriceSet']);
            }
            if (isset($data['bundleComponents']) && $data['bundleComponents'] !== null) {
                $instance->bundleComponents = array_map(function($item) { return CalculatedDraftOrderLineItem::fromArray($item); }, $data['bundleComponents']);
            }
            if (isset($data['components']) && $data['components'] !== null) {
                $instance->components = array_map(function($item) { return CalculatedDraftOrderLineItem::fromArray($item); }, $data['components']);
            }
            if (isset($data['custom']) && $data['custom'] !== null) {
                $instance->custom = $data['custom'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customAttributesV2']) && $data['customAttributesV2'] !== null) {
                $instance->customAttributesV2 = array_map(function($item) { return TypedAttribute::fromArray($item); }, $data['customAttributesV2']);
            }
            if (isset($data['discountedTotal']) && $data['discountedTotal'] !== null) {
                $instance->discountedTotal = MoneyV2::fromArray($data['discountedTotal']);
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = MoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['discountedUnitPrice']) && $data['discountedUnitPrice'] !== null) {
                $instance->discountedUnitPrice = MoneyV2::fromArray($data['discountedUnitPrice']);
            }
            if (isset($data['discountedUnitPriceSet']) && $data['discountedUnitPriceSet'] !== null) {
                $instance->discountedUnitPriceSet = MoneyBag::fromArray($data['discountedUnitPriceSet']);
            }
            if (isset($data['fulfillmentService']) && $data['fulfillmentService'] !== null) {
                $instance->fulfillmentService = FulfillmentService::fromArray($data['fulfillmentService']);
            }
            if (isset($data['image']) && $data['image'] !== null) {
                $instance->image = Image::fromArray($data['image']);
            }
            if (isset($data['isGiftCard']) && $data['isGiftCard'] !== null) {
                $instance->isGiftCard = $data['isGiftCard'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['originalTotal']) && $data['originalTotal'] !== null) {
                $instance->originalTotal = MoneyV2::fromArray($data['originalTotal']);
            }
            if (isset($data['originalTotalSet']) && $data['originalTotalSet'] !== null) {
                $instance->originalTotalSet = MoneyBag::fromArray($data['originalTotalSet']);
            }
            if (isset($data['originalUnitPrice']) && $data['originalUnitPrice'] !== null) {
                $instance->originalUnitPrice = MoneyV2::fromArray($data['originalUnitPrice']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = MoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['originalUnitPriceWithCurrency']) && $data['originalUnitPriceWithCurrency'] !== null) {
                $instance->originalUnitPriceWithCurrency = MoneyV2::fromArray($data['originalUnitPriceWithCurrency']);
            }
            if (isset($data['priceOverride']) && $data['priceOverride'] !== null) {
                $instance->priceOverride = MoneyV2::fromArray($data['priceOverride']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = Product::fromArray($data['product']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['taxable']) && $data['taxable'] !== null) {
                $instance->taxable = $data['taxable'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['totalDiscount']) && $data['totalDiscount'] !== null) {
                $instance->totalDiscount = MoneyV2::fromArray($data['totalDiscount']);
            }
            if (isset($data['totalDiscountSet']) && $data['totalDiscountSet'] !== null) {
                $instance->totalDiscountSet = MoneyBag::fromArray($data['totalDiscountSet']);
            }
            if (isset($data['uuid']) && $data['uuid'] !== null) {
                $instance->uuid = $data['uuid'];
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
            if ($this->appliedDiscount !== null) {
                $data['appliedDiscount'] = $this->appliedDiscount->asArray();
            }
            if ($this->approximateDiscountedUnitPriceSet !== null) {
                $data['approximateDiscountedUnitPriceSet'] = $this->approximateDiscountedUnitPriceSet->asArray();
            }
            if ($this->bundleComponents !== null) {
                $data['bundleComponents'] = array_map(function($item) { return $item->asArray(); }, $this->bundleComponents);
            }
            if ($this->components !== null) {
                $data['components'] = array_map(function($item) { return $item->asArray(); }, $this->components);
            }
            if ($this->custom !== null) {
                $data['custom'] = $this->custom;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customAttributesV2 !== null) {
                $data['customAttributesV2'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributesV2);
            }
            if ($this->discountedTotal !== null) {
                $data['discountedTotal'] = $this->discountedTotal->asArray();
            }
            if ($this->discountedTotalSet !== null) {
                $data['discountedTotalSet'] = $this->discountedTotalSet->asArray();
            }
            if ($this->discountedUnitPrice !== null) {
                $data['discountedUnitPrice'] = $this->discountedUnitPrice->asArray();
            }
            if ($this->discountedUnitPriceSet !== null) {
                $data['discountedUnitPriceSet'] = $this->discountedUnitPriceSet->asArray();
            }
            if ($this->fulfillmentService !== null) {
                $data['fulfillmentService'] = $this->fulfillmentService->asArray();
            }
            if ($this->image !== null) {
                $data['image'] = $this->image->asArray();
            }
            if ($this->isGiftCard !== null) {
                $data['isGiftCard'] = $this->isGiftCard;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->originalTotal !== null) {
                $data['originalTotal'] = $this->originalTotal->asArray();
            }
            if ($this->originalTotalSet !== null) {
                $data['originalTotalSet'] = $this->originalTotalSet->asArray();
            }
            if ($this->originalUnitPrice !== null) {
                $data['originalUnitPrice'] = $this->originalUnitPrice->asArray();
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->originalUnitPriceWithCurrency !== null) {
                $data['originalUnitPriceWithCurrency'] = $this->originalUnitPriceWithCurrency->asArray();
            }
            if ($this->priceOverride !== null) {
                $data['priceOverride'] = $this->priceOverride->asArray();
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->taxable !== null) {
                $data['taxable'] = $this->taxable;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->totalDiscount !== null) {
                $data['totalDiscount'] = $this->totalDiscount->asArray();
            }
            if ($this->totalDiscountSet !== null) {
                $data['totalDiscountSet'] = $this->totalDiscountSet->asArray();
            }
            if ($this->uuid !== null) {
                $data['uuid'] = $this->uuid;
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
            if ($this->weight !== null) {
                $data['weight'] = $this->weight->asArray();
            }
            return $data;
        }
}
