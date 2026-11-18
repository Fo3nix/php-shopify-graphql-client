<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProduct;

/**
 * Represents a product that has been manually selected for inclusion in a collection.
 */
class ShopifyCollectionInclusionProductSelection
{
    protected $product;
    protected $variantIds;

    
    /**
     * The product that's manually included in the collection.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The IDs of variants of this product that have been manually included
     * in the collection. Null when no variant-level manual selections exist
     * for this product; non-empty when one or more variants have been
     * manually included.
     *
     * @return string[]
     */
    public function getVariantIds(): ?array
    {
        return $this->variantIds;
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
            if (isset($data['variantIds']) && $data['variantIds'] !== null) {
                $instance->variantIds = $data['variantIds'];
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
            if ($this->variantIds !== null) {
                $data['variantIds'] = $this->variantIds;
            }
            return $data;
        }
}
