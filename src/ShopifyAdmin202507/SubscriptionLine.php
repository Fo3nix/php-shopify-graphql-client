<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionDiscountAllocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionPricingPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Image;

class SubscriptionLine
{
    protected $concatenatedOriginContract;
    protected $currentPrice;
    protected $customAttributes;
    protected $discountAllocations;
    protected $id;
    protected $lineDiscountedPrice;
    protected $pricingPolicy;
    protected $productId;
    protected $quantity;
    protected $requiresShipping;
    protected $sellingPlanId;
    protected $sellingPlanName;
    protected $sku;
    protected $taxable;
    protected $title;
    protected $variantId;
    protected $variantImage;
    protected $variantTitle;

    
    /**
     * @return SubscriptionContract
     */
    public function getConcatenatedOriginContract()
    {
        return $this->concatenatedOriginContract;
    }

    
    /**
     * @return MoneyV2
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    
    /**
     * @return Attribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return SubscriptionDiscountAllocation[]
     */
    public function getDiscountAllocations()
    {
        return $this->discountAllocations;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MoneyV2
     */
    public function getLineDiscountedPrice()
    {
        return $this->lineDiscountedPrice;
    }

    
    /**
     * @return SubscriptionPricingPolicy
     */
    public function getPricingPolicy()
    {
        return $this->pricingPolicy;
    }

    
    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
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
    public function getSellingPlanId()
    {
        return $this->sellingPlanId;
    }

    
    /**
     * @return string
     */
    public function getSellingPlanName()
    {
        return $this->sellingPlanName;
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
     * @return string
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    
    /**
     * @return Image
     */
    public function getVariantImage()
    {
        return $this->variantImage;
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
            if (isset($data['concatenatedOriginContract']) && $data['concatenatedOriginContract'] !== null) {
                $instance->concatenatedOriginContract = SubscriptionContract::fromArray($data['concatenatedOriginContract']);
            }
            if (isset($data['currentPrice']) && $data['currentPrice'] !== null) {
                $instance->currentPrice = MoneyV2::fromArray($data['currentPrice']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return SubscriptionDiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineDiscountedPrice']) && $data['lineDiscountedPrice'] !== null) {
                $instance->lineDiscountedPrice = MoneyV2::fromArray($data['lineDiscountedPrice']);
            }
            if (isset($data['pricingPolicy']) && $data['pricingPolicy'] !== null) {
                $instance->pricingPolicy = SubscriptionPricingPolicy::fromArray($data['pricingPolicy']);
            }
            if (isset($data['productId']) && $data['productId'] !== null) {
                $instance->productId = $data['productId'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['sellingPlanId']) && $data['sellingPlanId'] !== null) {
                $instance->sellingPlanId = $data['sellingPlanId'];
            }
            if (isset($data['sellingPlanName']) && $data['sellingPlanName'] !== null) {
                $instance->sellingPlanName = $data['sellingPlanName'];
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
            if (isset($data['variantId']) && $data['variantId'] !== null) {
                $instance->variantId = $data['variantId'];
            }
            if (isset($data['variantImage']) && $data['variantImage'] !== null) {
                $instance->variantImage = Image::fromArray($data['variantImage']);
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
            if ($this->concatenatedOriginContract !== null) {
                $data['concatenatedOriginContract'] = $this->concatenatedOriginContract->asArray();
            }
            if ($this->currentPrice !== null) {
                $data['currentPrice'] = $this->currentPrice->asArray();
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->discountAllocations !== null) {
                $data['discountAllocations'] = array_map(function($item) { return $item->asArray(); }, $this->discountAllocations);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineDiscountedPrice !== null) {
                $data['lineDiscountedPrice'] = $this->lineDiscountedPrice->asArray();
            }
            if ($this->pricingPolicy !== null) {
                $data['pricingPolicy'] = $this->pricingPolicy->asArray();
            }
            if ($this->productId !== null) {
                $data['productId'] = $this->productId;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->sellingPlanId !== null) {
                $data['sellingPlanId'] = $this->sellingPlanId;
            }
            if ($this->sellingPlanName !== null) {
                $data['sellingPlanName'] = $this->sellingPlanName;
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
            if ($this->variantId !== null) {
                $data['variantId'] = $this->variantId;
            }
            if ($this->variantImage !== null) {
                $data['variantImage'] = $this->variantImage->asArray();
            }
            if ($this->variantTitle !== null) {
                $data['variantTitle'] = $this->variantTitle;
            }
            return $data;
        }
}
