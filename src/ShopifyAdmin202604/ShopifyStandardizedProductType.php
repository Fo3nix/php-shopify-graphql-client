<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductTaxonomyNode;

/**
 * Represents the details of a specific type of product within the [Shopify product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17).
 */
class ShopifyStandardizedProductType
{
    protected $productTaxonomyNode;

    
    /**
     * The product taxonomy node associated with the standardized product type.
     *
     * @return ShopifyProductTaxonomyNode
     */
    public function getProductTaxonomyNode(): ?ShopifyProductTaxonomyNode
    {
        return $this->productTaxonomyNode;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['productTaxonomyNode']) && $data['productTaxonomyNode'] !== null) {
                $instance->productTaxonomyNode = ShopifyProductTaxonomyNode::fromArray($data['productTaxonomyNode']);
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
            if ($this->productTaxonomyNode !== null) {
                $data['productTaxonomyNode'] = $this->productTaxonomyNode->asArray();
            }
            return $data;
        }
}
