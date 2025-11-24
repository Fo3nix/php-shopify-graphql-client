<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyLinkedMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyProductOptionValue;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyTranslation;

class ShopifyProductOption
{
    protected $id;
    protected $linkedMetafield;
    protected $name;
    protected $optionValues;
    protected $position;
    protected $translations;
    protected $values;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyLinkedMetafield
     */
    public function getLinkedMetafield()
    {
        return $this->linkedMetafield;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyProductOptionValue[]
     */
    public function getOptionValues()
    {
        return $this->optionValues;
    }

    
    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    
    /**
     * @return ShopifyTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    
    /**
     * @return string[]
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['linkedMetafield']) && $data['linkedMetafield'] !== null) {
                $instance->linkedMetafield = ShopifyLinkedMetafield::fromArray($data['linkedMetafield']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['optionValues']) && $data['optionValues'] !== null) {
                $instance->optionValues = array_map(function($item) { return ShopifyProductOptionValue::fromArray($item); }, $data['optionValues']);
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = $data['values'];
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
            if ($this->linkedMetafield !== null) {
                $data['linkedMetafield'] = $this->linkedMetafield->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->optionValues !== null) {
                $data['optionValues'] = array_map(function($item) { return $item->asArray(); }, $this->optionValues);
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->values !== null) {
                $data['values'] = $this->values;
            }
            return $data;
        }
}
