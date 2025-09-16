<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryQuantityName;

class InventoryProperties
{
    protected $quantityNames;

    
    /**
     * @return InventoryQuantityName[]
     */
    public function getQuantityNames()
    {
        return $this->quantityNames;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['quantityNames']) && $data['quantityNames'] !== null) {
                $instance->quantityNames = array_map(function($item) { return InventoryQuantityName::fromArray($item); }, $data['quantityNames']);
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
            if ($this->quantityNames !== null) {
                $data['quantityNames'] = array_map(function($item) { return $item->asArray(); }, $this->quantityNames);
            }
            return $data;
        }
}
