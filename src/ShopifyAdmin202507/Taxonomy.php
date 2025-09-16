<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxonomyCategoryConnection;

class Taxonomy
{
    protected $categories;

    
    /**
     * @return TaxonomyCategoryConnection
     */
    public function getCategories()
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
                $instance->categories = TaxonomyCategoryConnection::fromArray($data['categories']);
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
