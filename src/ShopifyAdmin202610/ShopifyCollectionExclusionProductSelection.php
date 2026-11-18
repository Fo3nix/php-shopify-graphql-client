<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProduct;

/**
 * Represents a product that has been manually selected for exclusion from a collection.
 */
class ShopifyCollectionExclusionProductSelection
{
    protected $product;

    
    /**
     * The product that's manually excluded from the collection.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
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
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            return $data;
        }
}
