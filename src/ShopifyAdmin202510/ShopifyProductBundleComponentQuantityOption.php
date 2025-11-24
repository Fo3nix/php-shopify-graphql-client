<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductBundleComponentQuantityOptionValue;

class ShopifyProductBundleComponentQuantityOption
{
    protected $name;
    protected $parentOption;
    protected $values;

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyProductOption
     */
    public function getParentOption()
    {
        return $this->parentOption;
    }

    
    /**
     * @return ShopifyProductBundleComponentQuantityOptionValue[]
     */
    public function getValues()
    {
        return $this->values;
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
            if (isset($data['parentOption']) && $data['parentOption'] !== null) {
                $instance->parentOption = ShopifyProductOption::fromArray($data['parentOption']);
            }
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = array_map(function($item) { return ShopifyProductBundleComponentQuantityOptionValue::fromArray($item); }, $data['values']);
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
            if ($this->parentOption !== null) {
                $data['parentOption'] = $this->parentOption->asArray();
            }
            if ($this->values !== null) {
                $data['values'] = array_map(function($item) { return $item->asArray(); }, $this->values);
            }
            return $data;
        }
}
