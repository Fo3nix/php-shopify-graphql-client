<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionValidation;

/**
 * A non-metaobject metafield definition usable as a collection condition.
 */
class ShopifyCollectionConditionBasicMetafieldDefinition implements ShopifyCollectionConditionMetafieldDefinitionInterface
{
    protected $description;
    protected $id;
    protected $key;
    protected $name;
    protected $namespace;
    protected $ownerType;
    protected $type;
    protected $validations;

    
    /**
     * The description of the metafield definition.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The ID of the underlying metafield definition.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The unique identifier for the metafield definition within its namespace.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The human-readable name of the metafield definition.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The container for a group of metafields that the metafield definition is associated with.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    
    /**
     * The resource type that the metafield definition is attached to.
     *
     * @return string A ShopifyMetafieldOwnerTypeEnumObject value
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    
    /**
     * The data type of the metafield definition.
     *
     * @return ShopifyMetafieldDefinitionType
     */
    public function getType(): ?ShopifyMetafieldDefinitionType
    {
        return $this->type;
    }

    
    /**
     * A list of validation options for the metafields that belong to the metafield definition.
     *
     * @return ShopifyMetafieldDefinitionValidation[]
     */
    public function getValidations(): ?array
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
            if (isset($data['ownerType']) && $data['ownerType'] !== null) {
                $instance->ownerType = $data['ownerType'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = ShopifyMetafieldDefinitionType::fromArray($data['type']);
            }
            if (isset($data['validations']) && $data['validations'] !== null) {
                $instance->validations = array_map(function($item) { return ShopifyMetafieldDefinitionValidation::fromArray($item); }, $data['validations']);
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
            if ($this->ownerType !== null) {
                $data['ownerType'] = $this->ownerType;
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
