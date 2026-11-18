<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAttribute;

/**
 * Represents a Subscription Parent Line.
 */
class ShopifySubscriptionParentLine
{
    protected $bundledBy;
    protected $components;
    protected $customAttributes;
    protected $id;
    protected $presentmentTitle;
    protected $productId;
    protected $quantity;
    protected $sourceType;
    protected $title;
    protected $variantId;

    
    /**
     * The app that bundled this parent line.
     *
     * @return ShopifyApp
     */
    public function getBundledBy(): ?ShopifyApp
    {
        return $this->bundledBy;
    }

    
    /**
     * The direct component lines of the bundle parent line.
     *
     * @return ShopifySubscriptionLine[]
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    
    /**
     * List of custom attributes associated to the parent line item.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Presentment title of the item associated with the subscription parent line.
     *
     * @return string
     */
    public function getPresentmentTitle(): ?string
    {
        return $this->presentmentTitle;
    }

    
    /**
     * The product ID associated with the subscription parent line.
     *
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    
    /**
     * The quantity of the unit selected for the subscription parent line.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * The source type of the subscription parent line.
     *
     * @return string
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    
    /**
     * Product title of the item associated with the subscription parent line.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The product variant ID associated with the subscription parent line.
     *
     * @return string
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['bundledBy']) && $data['bundledBy'] !== null) {
                $instance->bundledBy = ShopifyApp::fromArray($data['bundledBy']);
            }
            if (isset($data['components']) && $data['components'] !== null) {
                $instance->components = array_map(function($item) { return ShopifySubscriptionLine::fromArray($item); }, $data['components']);
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['presentmentTitle']) && $data['presentmentTitle'] !== null) {
                $instance->presentmentTitle = $data['presentmentTitle'];
            }
            if (isset($data['productId']) && $data['productId'] !== null) {
                $instance->productId = $data['productId'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['sourceType']) && $data['sourceType'] !== null) {
                $instance->sourceType = $data['sourceType'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['variantId']) && $data['variantId'] !== null) {
                $instance->variantId = $data['variantId'];
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
            if ($this->bundledBy !== null) {
                $data['bundledBy'] = $this->bundledBy->asArray();
            }
            if ($this->components !== null) {
                $data['components'] = array_map(function($item) { return $item->asArray(); }, $this->components);
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->presentmentTitle !== null) {
                $data['presentmentTitle'] = $this->presentmentTitle;
            }
            if ($this->productId !== null) {
                $data['productId'] = $this->productId;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->sourceType !== null) {
                $data['sourceType'] = $this->sourceType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->variantId !== null) {
                $data['variantId'] = $this->variantId;
            }
            return $data;
        }
}
