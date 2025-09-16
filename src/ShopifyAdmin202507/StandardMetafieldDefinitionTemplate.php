<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionValidation;

class StandardMetafieldDefinitionTemplate
{
    protected $description;
    protected $id;
    protected $key;
    protected $name;
    protected $namespace;
    protected $ownerTypes;
    protected $type;
    protected $validations;
    protected $visibleToStorefrontApi;

    
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
    public function getId()
    {
        return $this->id;
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
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    
    /**
     * @return MetafieldOwnerTypeEnumObject[]
     */
    public function getOwnerTypes()
    {
        return $this->ownerTypes;
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
     * @return bool
     */
    public function getVisibleToStorefrontApi()
    {
        return $this->visibleToStorefrontApi;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['ownerTypes']) && $data['ownerTypes'] !== null) {
                $instance->ownerTypes = $data['ownerTypes'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = MetafieldDefinitionType::fromArray($data['type']);
            }
            if (isset($data['validations']) && $data['validations'] !== null) {
                $instance->validations = array_map(function($item) { return MetafieldDefinitionValidation::fromArray($item); }, $data['validations']);
            }
            if (isset($data['visibleToStorefrontApi']) && $data['visibleToStorefrontApi'] !== null) {
                $instance->visibleToStorefrontApi = $data['visibleToStorefrontApi'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->ownerTypes !== null) {
                $data['ownerTypes'] = $this->ownerTypes;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type->asArray();
            }
            if ($this->validations !== null) {
                $data['validations'] = array_map(function($item) { return $item->asArray(); }, $this->validations);
            }
            if ($this->visibleToStorefrontApi !== null) {
                $data['visibleToStorefrontApi'] = $this->visibleToStorefrontApi;
            }
            return $data;
        }
}
