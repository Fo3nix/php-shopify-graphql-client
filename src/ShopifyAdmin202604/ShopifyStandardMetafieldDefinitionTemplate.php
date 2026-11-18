<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionValidation;

/**
 * Standard metafield definition templates provide preset configurations to create metafield definitions.
 * Each template has a specific namespace and key that we've reserved to have specific meanings for common use cases.
 *
 * Refer to the [list of standard metafield definitions](https://shopify.dev/apps/metafields/definitions/standard-definitions).
 */
class ShopifyStandardMetafieldDefinitionTemplate implements ShopifyNode
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
     * The description of the standard metafield definition.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The key owned by the definition after the definition has been activated.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The human-readable name for the standard metafield definition.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The namespace owned by the definition after the definition has been activated.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    
    /**
     * The list of resource types that the standard metafield definition can be applied to.
     *
     * @return string[] ShopifyMetafieldOwnerTypeEnumObject values
     */
    public function getOwnerTypes(): ?array
    {
        return $this->ownerTypes;
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
