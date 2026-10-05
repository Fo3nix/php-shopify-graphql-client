<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCollectionDuplicateOperation;

class ShopifyCollectionOperations
{
    protected $duplicate;

    
    /**
     * @return ShopifyCollectionDuplicateOperation[]
     */
    public function getDuplicate()
    {
        return $this->duplicate;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['duplicate']) && $data['duplicate'] !== null) {
                $instance->duplicate = array_map(function($item) { return ShopifyCollectionDuplicateOperation::fromArray($item); }, $data['duplicate']);
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
            if ($this->duplicate !== null) {
                $data['duplicate'] = array_map(function($item) { return $item->asArray(); }, $this->duplicate);
            }
            return $data;
        }
}
