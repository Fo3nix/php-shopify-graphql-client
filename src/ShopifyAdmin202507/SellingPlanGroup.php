<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class SellingPlanGroup
{
    protected $appId;
    protected $appliesToProduct;
    protected $appliesToProductVariant;
    protected $appliesToProductVariants;
    protected $createdAt;
    protected $description;
    protected $id;
    protected $merchantCode;
    protected $name;
    protected $options;
    protected $position;
    protected $productVariants;
    protected $productVariantsCount;
    protected $products;
    protected $productsCount;
    protected $sellingPlans;
    protected $summary;
    protected $translations;

    
    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    
    /**
     * @return bool
     */
    public function getAppliesToProduct()
    {
        return $this->appliesToProduct;
    }

    
    /**
     * @return bool
     */
    public function getAppliesToProductVariant()
    {
        return $this->appliesToProductVariant;
    }

    
    /**
     * @return bool
     */
    public function getAppliesToProductVariants()
    {
        return $this->appliesToProductVariants;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getMerchantCode()
    {
        return $this->merchantCode;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    
    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    
    /**
     * @return ProductVariantConnection
     */
    public function getProductVariants()
    {
        return $this->productVariants;
    }

    
    /**
     * @return Count
     */
    public function getProductVariantsCount()
    {
        return $this->productVariantsCount;
    }

    
    /**
     * @return ProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return Count
     */
    public function getProductsCount()
    {
        return $this->productsCount;
    }

    
    /**
     * @return SellingPlanConnection
     */
    public function getSellingPlans()
    {
        return $this->sellingPlans;
    }

    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['appId']) && $data['appId'] !== null) {
                $instance->appId = $data['appId'];
            }
            if (isset($data['appliesToProduct']) && $data['appliesToProduct'] !== null) {
                $instance->appliesToProduct = $data['appliesToProduct'];
            }
            if (isset($data['appliesToProductVariant']) && $data['appliesToProductVariant'] !== null) {
                $instance->appliesToProductVariant = $data['appliesToProductVariant'];
            }
            if (isset($data['appliesToProductVariants']) && $data['appliesToProductVariants'] !== null) {
                $instance->appliesToProductVariants = $data['appliesToProductVariants'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['merchantCode']) && $data['merchantCode'] !== null) {
                $instance->merchantCode = $data['merchantCode'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['options']) && $data['options'] !== null) {
                $instance->options = $data['options'];
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
            }
            if (isset($data['productVariants']) && $data['productVariants'] !== null) {
                $instance->productVariants = ProductVariantConnection::fromArray($data['productVariants']);
            }
            if (isset($data['productVariantsCount']) && $data['productVariantsCount'] !== null) {
                $instance->productVariantsCount = Count::fromArray($data['productVariantsCount']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ProductConnection::fromArray($data['products']);
            }
            if (isset($data['productsCount']) && $data['productsCount'] !== null) {
                $instance->productsCount = Count::fromArray($data['productsCount']);
            }
            if (isset($data['sellingPlans']) && $data['sellingPlans'] !== null) {
                $instance->sellingPlans = SellingPlanConnection::fromArray($data['sellingPlans']);
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
            if ($this->appId !== null) {
                $data['appId'] = $this->appId;
            }
            if ($this->appliesToProduct !== null) {
                $data['appliesToProduct'] = $this->appliesToProduct;
            }
            if ($this->appliesToProductVariant !== null) {
                $data['appliesToProductVariant'] = $this->appliesToProductVariant;
            }
            if ($this->appliesToProductVariants !== null) {
                $data['appliesToProductVariants'] = $this->appliesToProductVariants;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->merchantCode !== null) {
                $data['merchantCode'] = $this->merchantCode;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->options !== null) {
                $data['options'] = $this->options;
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            if ($this->productVariants !== null) {
                $data['productVariants'] = $this->productVariants->asArray();
            }
            if ($this->productVariantsCount !== null) {
                $data['productVariantsCount'] = $this->productVariantsCount->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->productsCount !== null) {
                $data['productsCount'] = $this->productsCount->asArray();
            }
            if ($this->sellingPlans !== null) {
                $data['sellingPlans'] = $this->sellingPlans->asArray();
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
