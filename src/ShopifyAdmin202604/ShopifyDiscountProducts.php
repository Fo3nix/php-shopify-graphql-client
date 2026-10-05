<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductVariantConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductConnection;

class ShopifyDiscountProducts
{
    protected $productVariants;
    protected $products;

    
    /**
     * @return ShopifyProductVariantConnection
     */
    public function getProductVariants()
    {
        return $this->productVariants;
    }

    
    /**
     * @return ShopifyProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['productVariants']) && $data['productVariants'] !== null) {
                $instance->productVariants = ShopifyProductVariantConnection::fromArray($data['productVariants']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
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
            if ($this->productVariants !== null) {
                $data['productVariants'] = $this->productVariants->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            return $data;
        }
}
