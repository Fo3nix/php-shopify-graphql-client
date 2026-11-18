<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;

/**
 * A selling method that defines how products can be sold through purchase options like subscriptions, pre-orders, or try-before-you-buy. Groups one or more [`SellingPlan`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlan) objects that share the same selling method and options.
 *
 * The group provides buyer-facing labels and merchant-facing descriptions for the selling method. Associates [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects with selling plan groups to offer them through these purchase options.
 *
 * > Caution:
 * > Selling plan groups and their associated records are automatically deleted 48 hours after a merchant uninstalls the [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) that created them. Back up these records if you need to restore them later.
 */
class ShopifySellingPlanGroup implements ShopifyHasPublishedTranslations, ShopifyNode
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
     * The ID for app, exposed in Liquid and product JSON.
     *
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    
    /**
     * Whether the given product is directly associated to the selling plan group.
     *
     * @return bool
     */
    public function getAppliesToProduct(): ?bool
    {
        return $this->appliesToProduct;
    }

    
    /**
     * Whether the given product variant is directly associated to the selling plan group.
     *
     * @return bool
     */
    public function getAppliesToProductVariant(): ?bool
    {
        return $this->appliesToProductVariant;
    }

    
    /**
     * Whether any of the product variants of the given product are associated to the selling plan group.
     *
     * @return bool
     */
    public function getAppliesToProductVariants(): ?bool
    {
        return $this->appliesToProductVariants;
    }

    
    /**
     * The date and time when the selling plan group was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The merchant-facing description of the selling plan group.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
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
     * The merchant-facing label of the selling plan group.
     *
     * @return string
     */
    public function getMerchantCode(): ?string
    {
        return $this->merchantCode;
    }

    
    /**
     * The buyer-facing label of the selling plan group.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The values of all options available on the selling plan group. Selling plans are grouped together in Liquid when they're created by the same app, and have the same `selling_plan_group.name` and `selling_plan_group.options` values.
     *
     * @return string[]
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    
    /**
     * The relative position of the selling plan group for display.
     *
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    
    /**
     * Product variants associated to the selling plan group.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getProductVariants(): ?ShopifyProductVariantConnection
    {
        return $this->productVariants;
    }

    
    /**
     * A count of product variants associated to the selling plan group.
     *
     * @return ShopifyCount
     */
    public function getProductVariantsCount(): ?ShopifyCount
    {
        return $this->productVariantsCount;
    }

    
    /**
     * Products associated to the selling plan group.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * A count of products associated to the selling plan group.
     *
     * @return ShopifyCount
     */
    public function getProductsCount(): ?ShopifyCount
    {
        return $this->productsCount;
    }

    
    /**
     * Selling plans associated to the selling plan group.
     *
     * @return ShopifySellingPlanConnection
     */
    public function getSellingPlans(): ?ShopifySellingPlanConnection
    {
        return $this->sellingPlans;
    }

    
    /**
     * A summary of the policies associated to the selling plan group.
     *
     * @return string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
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
                $instance->productVariants = ShopifyProductVariantConnection::fromArray($data['productVariants']);
            }
            if (isset($data['productVariantsCount']) && $data['productVariantsCount'] !== null) {
                $instance->productVariantsCount = ShopifyCount::fromArray($data['productVariantsCount']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
            }
            if (isset($data['productsCount']) && $data['productsCount'] !== null) {
                $instance->productsCount = ShopifyCount::fromArray($data['productsCount']);
            }
            if (isset($data['sellingPlans']) && $data['sellingPlans'] !== null) {
                $instance->sellingPlans = ShopifySellingPlanConnection::fromArray($data['sellingPlans']);
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
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
