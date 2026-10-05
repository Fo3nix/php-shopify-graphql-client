<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyComponentizedProductsBundleConsolidatedOptionSelection;

class ShopifyComponentizedProductsBundleConsolidatedOption
{
    protected $name;
    protected $selections;

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyComponentizedProductsBundleConsolidatedOptionSelection[]
     */
    public function getSelections()
    {
        return $this->selections;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['selections']) && $data['selections'] !== null) {
                $instance->selections = array_map(function($item) { return ShopifyComponentizedProductsBundleConsolidatedOptionSelection::fromArray($item); }, $data['selections']);
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
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->selections !== null) {
                $data['selections'] = array_map(function($item) { return $item->asArray(); }, $this->selections);
            }
            return $data;
        }
}
