<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectFieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldReference;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldReferenceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectThumbnail;

class MetaobjectField
{
    protected $definition;
    protected $jsonValue;
    protected $key;
    protected $reference;
    protected $references;
    protected $thumbnail;
    protected $type;
    protected $value;

    
    /**
     * @return MetaobjectFieldDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
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
     * @return MetafieldReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    
    /**
     * @return MetafieldReferenceConnection
     */
    public function getReferences()
    {
        return $this->references;
    }

    
    /**
     * @return MetaobjectThumbnail
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = MetaobjectFieldDefinition::fromArray($data['definition']);
            }
            if (isset($data['jsonValue']) && $data['jsonValue'] !== null) {
                $instance->jsonValue = $data['jsonValue'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['reference']) && $data['reference'] !== null) {
                $instance->reference = MetafieldReference::fromArray($data['reference']);
            }
            if (isset($data['references']) && $data['references'] !== null) {
                $instance->references = MetafieldReferenceConnection::fromArray($data['references']);
            }
            if (isset($data['thumbnail']) && $data['thumbnail'] !== null) {
                $instance->thumbnail = MetaobjectThumbnail::fromArray($data['thumbnail']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
            if ($this->jsonValue !== null) {
                $data['jsonValue'] = $this->jsonValue;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->reference !== null) {
                $data['reference'] = $this->reference->asArray();
            }
            if ($this->references !== null) {
                $data['references'] = $this->references->asArray();
            }
            if ($this->thumbnail !== null) {
                $data['thumbnail'] = $this->thumbnail->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
