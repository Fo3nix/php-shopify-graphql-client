<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductBundleComponentQuantityOptionValue;

class ProductBundleComponentQuantityOption
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
     * @return ProductOption
     */
    public function getParentOption()
    {
        return $this->parentOption;
    }

    
    /**
     * @return ProductBundleComponentQuantityOptionValue[]
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
                $instance->parentOption = ProductOption::fromArray($data['parentOption']);
            }
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = array_map(function($item) { return ProductBundleComponentQuantityOptionValue::fromArray($item); }, $data['values']);
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
