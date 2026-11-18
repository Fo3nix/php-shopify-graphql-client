<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetaobjectFieldDefinitionCapabilities;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionValidation;

/**
 * Defines a field for a MetaobjectDefinition with properties
 * such as the field's data type and validations.
 */
class ShopifyMetaobjectFieldDefinition
{
    protected $capabilities;
    protected $description;
    protected $key;
    protected $name;
    protected $required;
    protected $type;
    protected $validations;

    
    /**
     * Capabilities available for this metaobject field definition.
     *
     * @return ShopifyMetaobjectFieldDefinitionCapabilities
     */
    public function getCapabilities(): ?ShopifyMetaobjectFieldDefinitionCapabilities
    {
        return $this->capabilities;
    }

    
    /**
     * The administrative description.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * A key name used to identify the field within the metaobject composition.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The human-readable name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Required status of the field within the metaobject composition.
     *
     * @return bool
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    
    /**
     * The type of data that the field stores.
     *
     * @return ShopifyMetafieldDefinitionType
     */
    public function getType(): ?ShopifyMetafieldDefinitionType
    {
        return $this->type;
    }

    
    /**
     * A list of [validation options](https://shopify.dev/apps/metafields/definitions/validation) for
     * the field. For example, a field with the type `date` can set a minimum date requirement.
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
            if (isset($data['capabilities']) && $data['capabilities'] !== null) {
                $instance->capabilities = ShopifyMetaobjectFieldDefinitionCapabilities::fromArray($data['capabilities']);
            }
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
            if ($this->capabilities !== null) {
                $data['capabilities'] = $this->capabilities->asArray();
            }
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
