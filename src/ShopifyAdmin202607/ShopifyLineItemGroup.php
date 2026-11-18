<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAttribute;

/**
 * The information for [line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) that are part of a bundle. When a bundle is purchased, each component line item references its [`LineItemGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItemGroup) through the [`lineItemGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem#field-lineItemGroup) field to maintain the relationship with the bundle.
 *
 * The parent bundle's product, variant, and custom attributes enable apps to group and display bundle components in order management systems, transactional emails, and other contexts where understanding the bundle structure is needed.
 *
 * Learn more about [product bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles).
 */
class ShopifyLineItemGroup implements ShopifyNode
{
    protected $customAttributes;
    protected $id;
    protected $productId;
    protected $quantity;
    protected $title;
    protected $variantId;
    protected $variantSku;

    
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
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * ID of the product of the line item group.
     *
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    
    /**
     * Quantity of the line item group on the order.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    
    /**
     * Title of the line item group.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * ID of the variant of the line item group.
     *
     * @return string
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

    
    /**
     * SKU of the variant of the line item group.
     *
     * @return string
     */
    public function getVariantSku(): ?string
    {
        return $this->variantSku;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['productId']) && $data['productId'] !== null) {
                $instance->productId = $data['productId'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['variantId']) && $data['variantId'] !== null) {
                $instance->variantId = $data['variantId'];
            }
            if (isset($data['variantSku']) && $data['variantSku'] !== null) {
                $instance->variantSku = $data['variantSku'];
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
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->productId !== null) {
                $data['productId'] = $this->productId;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->variantId !== null) {
                $data['variantId'] = $this->variantId;
            }
            if ($this->variantSku !== null) {
                $data['variantSku'] = $this->variantSku;
            }
            return $data;
        }
}
