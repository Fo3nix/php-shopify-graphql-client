<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FilterOption;

class SearchFilterOptions
{
    protected $productAvailability;

    
    /**
     * @return FilterOption[]
     */
    public function getProductAvailability()
    {
        return $this->productAvailability;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['productAvailability']) && $data['productAvailability'] !== null) {
                $instance->productAvailability = array_map(function($item) { return FilterOption::fromArray($item); }, $data['productAvailability']);
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
            if ($this->productAvailability !== null) {
                $data['productAvailability'] = array_map(function($item) { return $item->asArray(); }, $this->productAvailability);
            }
            return $data;
        }
}
