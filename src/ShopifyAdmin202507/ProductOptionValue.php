<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductOptionValueSwatch;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class ProductOptionValue
{
    protected $hasVariants;
    protected $id;
    protected $linkedMetafieldValue;
    protected $name;
    protected $swatch;
    protected $translations;

    
    /**
     * @return bool
     */
    public function getHasVariants()
    {
        return $this->hasVariants;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLinkedMetafieldValue()
    {
        return $this->linkedMetafieldValue;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ProductOptionValueSwatch
     */
    public function getSwatch()
    {
        return $this->swatch;
    }

    
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['hasVariants']) && $data['hasVariants'] !== null) {
                $instance->hasVariants = $data['hasVariants'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['linkedMetafieldValue']) && $data['linkedMetafieldValue'] !== null) {
                $instance->linkedMetafieldValue = $data['linkedMetafieldValue'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['swatch']) && $data['swatch'] !== null) {
                $instance->swatch = ProductOptionValueSwatch::fromArray($data['swatch']);
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
            if ($this->hasVariants !== null) {
                $data['hasVariants'] = $this->hasVariants;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->linkedMetafieldValue !== null) {
                $data['linkedMetafieldValue'] = $this->linkedMetafieldValue;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->swatch !== null) {
                $data['swatch'] = $this->swatch->asArray();
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
