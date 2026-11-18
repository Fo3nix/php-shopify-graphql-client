<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionValidation;

/**
 * A preset field definition on a standard metaobject definition template.
 */
class ShopifyStandardMetaobjectDefinitionFieldTemplate
{
    protected $description;
    protected $key;
    protected $name;
    protected $required;
    protected $type;
    protected $validations;
    protected $visibleToStorefrontApi;

    
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
     * The key owned by the definition after the definition has been enabled.
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
     * The required status of the field within the object composition.
     *
     * @return bool
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    
    /**
     * The associated [metafield definition type](https://shopify.dev/apps/metafields/definitions/types) that the metafield stores.
     *
     * @return ShopifyMetafieldDefinitionType
     */
    public function getType(): ?ShopifyMetafieldDefinitionType
    {
        return $this->type;
    }

    
    /**
     * The configured validations for the standard metafield definition.
     *
     * @return ShopifyMetafieldDefinitionValidation[]
     */
    public function getValidations(): ?array
    {
        return $this->validations;
    }

    
    /**
     * Whether metafields for the definition are by default visible using the Storefront API.
     *
     * @return bool
     */
    public function getVisibleToStorefrontApi(): ?bool
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
            if ($this->visibleToStorefrontApi !== null) {
                $data['visibleToStorefrontApi'] = $this->visibleToStorefrontApi;
            }
            return $data;
        }
}
