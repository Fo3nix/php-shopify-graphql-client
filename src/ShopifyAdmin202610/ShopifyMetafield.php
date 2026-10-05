<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldReference;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldReferenceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslation;

class ShopifyMetafield
{
    protected $compareDigest;
    protected $createdAt;
    protected $definition;
    protected $description;
    protected $id;
    protected $jsonValue;
    protected $key;
    protected $legacyResourceId;
    protected $namespace;
    protected $owner;
    protected $ownerType;
    protected $reference;
    protected $references;
    protected $sizeInBytes;
    protected $translatable;
    protected $translations;
    protected $type;
    protected $updatedAt;
    protected $value;

    
    /**
     * @return string
     */
    public function getCompareDigest()
    {
        return $this->compareDigest;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyMetafieldDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
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
    public function getJsonValue()
    {
        return $this->jsonValue;
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
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    
    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    
    /**
     * @return ShopifyMetafieldOwnerTypeEnumObject
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    
    /**
     * @return ShopifyMetafieldReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    
    /**
     * @return ShopifyMetafieldReferenceConnection
     */
    public function getReferences()
    {
        return $this->references;
    }

    
    /**
     * @return int
     */
    public function getSizeInBytes()
    {
        return $this->sizeInBytes;
    }

    
    /**
     * @return bool
     */
    public function getTranslatable()
    {
        return $this->translatable;
    }

    
    /**
     * @return ShopifyTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['compareDigest']) && $data['compareDigest'] !== null) {
                $instance->compareDigest = $data['compareDigest'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = ShopifyMetafieldDefinition::fromArray($data['definition']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['jsonValue']) && $data['jsonValue'] !== null) {
                $instance->jsonValue = $data['jsonValue'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['owner']) && $data['owner'] !== null) {
                $instance->owner = $data['owner'];
            }
            if (isset($data['ownerType']) && $data['ownerType'] !== null) {
                $instance->ownerType = $data['ownerType'];
            }
            if (isset($data['reference']) && $data['reference'] !== null) {
                $instance->reference = ShopifyMetafieldReference::fromArray($data['reference']);
            }
            if (isset($data['references']) && $data['references'] !== null) {
                $instance->references = ShopifyMetafieldReferenceConnection::fromArray($data['references']);
            }
            if (isset($data['sizeInBytes']) && $data['sizeInBytes'] !== null) {
                $instance->sizeInBytes = $data['sizeInBytes'];
            }
            if (isset($data['translatable']) && $data['translatable'] !== null) {
                $instance->translatable = $data['translatable'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->compareDigest !== null) {
                $data['compareDigest'] = $this->compareDigest;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->jsonValue !== null) {
                $data['jsonValue'] = $this->jsonValue;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->owner !== null) {
                $data['owner'] = $this->owner;
            }
            if ($this->ownerType !== null) {
                $data['ownerType'] = $this->ownerType;
            }
            if ($this->reference !== null) {
                $data['reference'] = $this->reference->asArray();
            }
            if ($this->references !== null) {
                $data['references'] = $this->references->asArray();
            }
            if ($this->sizeInBytes !== null) {
                $data['sizeInBytes'] = $this->sizeInBytes;
            }
            if ($this->translatable !== null) {
                $data['translatable'] = $this->translatable;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
