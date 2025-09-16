<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductTaxonomyNode;

class StandardizedProductType
{
    protected $productTaxonomyNode;

    
    /**
     * @return ProductTaxonomyNode
     */
    public function getProductTaxonomyNode()
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
                $instance->productTaxonomyNode = ProductTaxonomyNode::fromArray($data['productTaxonomyNode']);
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
