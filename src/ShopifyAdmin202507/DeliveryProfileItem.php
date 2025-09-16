<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Product;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariantConnection;

class DeliveryProfileItem
{
    protected $id;
    protected $product;
    protected $variants;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    
    /**
     * @return ProductVariantConnection
     */
    public function getVariants()
    {
        return $this->variants;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = Product::fromArray($data['product']);
            }
            if (isset($data['variants']) && $data['variants'] !== null) {
                $instance->variants = ProductVariantConnection::fromArray($data['variants']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->variants !== null) {
                $data['variants'] = $this->variants->asArray();
            }
            return $data;
        }
}
