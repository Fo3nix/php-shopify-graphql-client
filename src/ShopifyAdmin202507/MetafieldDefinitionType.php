<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionSupportedValidation;

class MetafieldDefinitionType
{
    protected $category;
    protected $name;
    protected $supportedValidations;
    protected $supportsDefinitionMigrations;
    protected $valueType;

    
    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return MetafieldDefinitionSupportedValidation[]
     */
    public function getSupportedValidations()
    {
        return $this->supportedValidations;
    }

    
    /**
     * @return bool
     */
    public function getSupportsDefinitionMigrations()
    {
        return $this->supportsDefinitionMigrations;
    }

    
    /**
     * @return MetafieldValueTypeEnumObject
     */
    public function getValueType()
    {
        return $this->valueType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = $data['category'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['supportedValidations']) && $data['supportedValidations'] !== null) {
                $instance->supportedValidations = array_map(function($item) { return MetafieldDefinitionSupportedValidation::fromArray($item); }, $data['supportedValidations']);
            }
            if (isset($data['supportsDefinitionMigrations']) && $data['supportsDefinitionMigrations'] !== null) {
                $instance->supportsDefinitionMigrations = $data['supportsDefinitionMigrations'];
            }
            if (isset($data['valueType']) && $data['valueType'] !== null) {
                $instance->valueType = $data['valueType'];
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
            if ($this->category !== null) {
                $data['category'] = $this->category;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->supportedValidations !== null) {
                $data['supportedValidations'] = array_map(function($item) { return $item->asArray(); }, $this->supportedValidations);
            }
            if ($this->supportsDefinitionMigrations !== null) {
                $data['supportsDefinitionMigrations'] = $this->supportsDefinitionMigrations;
            }
            if ($this->valueType !== null) {
                $data['valueType'] = $this->valueType;
            }
            return $data;
        }
}
