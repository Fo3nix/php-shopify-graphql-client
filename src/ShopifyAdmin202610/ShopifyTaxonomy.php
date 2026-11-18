<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTaxonomyCategoryConnection;

/**
 * Represents Shopify's [standardized product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17) tree. Provides categories that you can filter by search criteria or hierarchical relationships.
 *
 * You can search categories globally, retrieve children of a specific category, find siblings, or get descendants. When you specify no filter arguments, you get all top-level categories in the taxonomy.
 */
class ShopifyTaxonomy
{
    protected $categories;

    
    /**
     * Returns the categories of the product taxonomy based on the arguments provided.
     * If a `search` argument is provided, then all categories that match the search query globally are returned.
     * If a `children_of` argument is provided, then all children of the specified category are returned.
     * If a `siblings_of` argument is provided, then all siblings of the specified category are returned.
     * If a `descendants_of` argument is provided, then all descendents of the specified category are returned.
     * If no arguments are provided, then all the top-level categories of the taxonomy are returned.
     *
     * @return ShopifyTaxonomyCategoryConnection
     */
    public function getCategories(): ?ShopifyTaxonomyCategoryConnection
    {
        return $this->categories;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['categories']) && $data['categories'] !== null) {
                $instance->categories = ShopifyTaxonomyCategoryConnection::fromArray($data['categories']);
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
            if ($this->categories !== null) {
                $data['categories'] = $this->categories->asArray();
            }
            return $data;
        }
}
