<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldAccess;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldCapabilities;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConstraints;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StandardMetafieldDefinitionTemplate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionValidation;

class MetafieldDefinition
{
    protected $access;
    protected $capabilities;
    protected $constraints;
    protected $description;
    protected $id;
    protected $key;
    protected $metafields;
    protected $metafieldsCount;
    protected $name;
    protected $namespace;
    protected $ownerType;
    protected $pinnedPosition;
    protected $standardTemplate;
    protected $type;
    protected $useAsCollectionCondition;
    protected $validationStatus;
    protected $validations;

    
    /**
     * @return MetafieldAccess
     */
    public function getAccess()
    {
        return $this->access;
    }

    
    /**
     * @return MetafieldCapabilities
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    
    /**
     * @return MetafieldDefinitionConstraints
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    
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
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return int
     */
    public function getMetafieldsCount()
    {
        return $this->metafieldsCount;
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
     * @return MetafieldOwnerTypeEnumObject
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    
    /**
     * @return int
     */
    public function getPinnedPosition()
    {
        return $this->pinnedPosition;
    }

    
    /**
     * @return StandardMetafieldDefinitionTemplate
     */
    public function getStandardTemplate()
    {
        return $this->standardTemplate;
    }

    
    /**
     * @return MetafieldDefinitionType
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return bool
     */
    public function getUseAsCollectionCondition()
    {
        return $this->useAsCollectionCondition;
    }

    
    /**
     * @return MetafieldDefinitionValidationStatusEnumObject
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
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
            if (isset($data['access']) && $data['access'] !== null) {
                $instance->access = MetafieldAccess::fromArray($data['access']);
            }
            if (isset($data['capabilities']) && $data['capabilities'] !== null) {
                $instance->capabilities = MetafieldCapabilities::fromArray($data['capabilities']);
            }
            if (isset($data['constraints']) && $data['constraints'] !== null) {
                $instance->constraints = MetafieldDefinitionConstraints::fromArray($data['constraints']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['metafieldsCount']) && $data['metafieldsCount'] !== null) {
                $instance->metafieldsCount = $data['metafieldsCount'];
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
            if (isset($data['pinnedPosition']) && $data['pinnedPosition'] !== null) {
                $instance->pinnedPosition = $data['pinnedPosition'];
            }
            if (isset($data['standardTemplate']) && $data['standardTemplate'] !== null) {
                $instance->standardTemplate = StandardMetafieldDefinitionTemplate::fromArray($data['standardTemplate']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = MetafieldDefinitionType::fromArray($data['type']);
            }
            if (isset($data['useAsCollectionCondition']) && $data['useAsCollectionCondition'] !== null) {
                $instance->useAsCollectionCondition = $data['useAsCollectionCondition'];
            }
            if (isset($data['validationStatus']) && $data['validationStatus'] !== null) {
                $instance->validationStatus = $data['validationStatus'];
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
            if ($this->access !== null) {
                $data['access'] = $this->access->asArray();
            }
            if ($this->capabilities !== null) {
                $data['capabilities'] = $this->capabilities->asArray();
            }
            if ($this->constraints !== null) {
                $data['constraints'] = $this->constraints->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->metafieldsCount !== null) {
                $data['metafieldsCount'] = $this->metafieldsCount;
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
            if ($this->pinnedPosition !== null) {
                $data['pinnedPosition'] = $this->pinnedPosition;
            }
            if ($this->standardTemplate !== null) {
                $data['standardTemplate'] = $this->standardTemplate->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type->asArray();
            }
            if ($this->useAsCollectionCondition !== null) {
                $data['useAsCollectionCondition'] = $this->useAsCollectionCondition;
            }
            if ($this->validationStatus !== null) {
                $data['validationStatus'] = $this->validationStatus;
            }
            if ($this->validations !== null) {
                $data['validations'] = array_map(function($item) { return $item->asArray(); }, $this->validations);
            }
            return $data;
        }
}
