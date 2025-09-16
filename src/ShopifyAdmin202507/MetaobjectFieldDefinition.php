<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionValidation;

class MetaobjectFieldDefinition
{
    protected $description;
    protected $key;
    protected $name;
    protected $required;
    protected $type;
    protected $validations;

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    
    /**
     * @return MetafieldDefinitionType
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return MetafieldDefinitionValidation[]
     */
    public function getValidations()
    {
        return $this->validations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['required']) && $data['required'] !== null) {
                $instance->required = $data['required'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = MetafieldDefinitionType::fromArray($data['type']);
            }
            if (isset($data['validations']) && $data['validations'] !== null) {
                $instance->validations = array_map(function($item) { return MetafieldDefinitionValidation::fromArray($item); }, $data['validations']);
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->required !== null) {
                $data['required'] = $this->required;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type->asArray();
            }
            if ($this->validations !== null) {
                $data['validations'] = array_map(function($item) { return $item->asArray(); }, $this->validations);
            }
            return $data;
        }
}
