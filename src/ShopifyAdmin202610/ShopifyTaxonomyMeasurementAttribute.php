<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAttribute;

/**
 * A Shopify product taxonomy measurement attribute.
 */
class ShopifyTaxonomyMeasurementAttribute implements ShopifyNode
{
    protected $id;
    protected $name;
    protected $options;

    
    /**
     * The unique ID of the TaxonomyAttribute.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The name of the product taxonomy attribute. For example, Color.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The product taxonomy attribute options.
     *
     * @return ShopifyAttribute[]
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['options']) && $data['options'] !== null) {
                $instance->options = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['options']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->options !== null) {
                $data['options'] = array_map(function($item) { return $item->asArray(); }, $this->options);
            }
            return $data;
        }
}
