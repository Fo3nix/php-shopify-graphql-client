<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyProductBundleComponentOptionSelectionValue;

/**
 * A relationship between a component option and a parent option.
 */
class ShopifyProductBundleComponentOptionSelection
{
    protected $componentOption;
    protected $parentOption;
    protected $values;

    
    /**
     * The option that existed on the component product prior to the fixed bundle creation.
     *
     * @return ShopifyProductOption
     */
    public function getComponentOption(): ?ShopifyProductOption
    {
        return $this->componentOption;
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
     * The component option values that are actively selected for this relationship.
     *
     * @return ShopifyProductBundleComponentOptionSelectionValue[]
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
            if (isset($data['componentOption']) && $data['componentOption'] !== null) {
                $instance->componentOption = ShopifyProductOption::fromArray($data['componentOption']);
            }
            if (isset($data['parentOption']) && $data['parentOption'] !== null) {
                $instance->parentOption = ShopifyProductOption::fromArray($data['parentOption']);
            }
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = array_map(function($item) { return ShopifyProductBundleComponentOptionSelectionValue::fromArray($item); }, $data['values']);
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
            if ($this->componentOption !== null) {
                $data['componentOption'] = $this->componentOption->asArray();
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
