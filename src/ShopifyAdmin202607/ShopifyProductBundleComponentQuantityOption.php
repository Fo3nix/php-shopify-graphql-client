<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductBundleComponentQuantityOptionValue;

/**
 * A quantity option related to a bundle.
 */
class ShopifyProductBundleComponentQuantityOption
{
    protected $name;
    protected $parentOption;
    protected $values;

    
    /**
     * The name of the option value.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The option that was created on the parent product.
     *
     * @return ShopifyProductOption
     */
    public function getParentOption(): ?ShopifyProductOption
    {
        return $this->parentOption;
    }

    
    /**
     * The quantity values of the option.
     *
     * @return ShopifyProductBundleComponentQuantityOptionValue[]
     */
    public function getValues(): ?array
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
