<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTaxonomyCategory;

/**
 * A value for a product category exclusion condition.
 */
class ShopifyCollectionSourceExclusionConditionProductCategoryValue
{
    protected $category;
    protected $includeDescendants;

    
    /**
     * The product category to match against.
     *
     * @return ShopifyTaxonomyCategory
     */
    public function getCategory(): ?ShopifyTaxonomyCategory
    {
        return $this->category;
    }

    
    /**
     * Whether to include descendants of the product category.
     *
     * @return bool
     */
    public function getIncludeDescendants(): ?bool
    {
        return $this->includeDescendants;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = ShopifyTaxonomyCategory::fromArray($data['category']);
            }
            if (isset($data['includeDescendants']) && $data['includeDescendants'] !== null) {
                $instance->includeDescendants = $data['includeDescendants'];
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
            if ($this->category !== null) {
                $data['category'] = $this->category->asArray();
            }
            if ($this->includeDescendants !== null) {
                $data['includeDescendants'] = $this->includeDescendants;
            }
            return $data;
        }
}
