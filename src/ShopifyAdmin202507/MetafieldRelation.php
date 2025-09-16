<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldReferencer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldReference;

class MetafieldRelation
{
    protected $key;
    protected $name;
    protected $namespace;
    protected $referencer;
    protected $target;

    
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
     * @return MetafieldReferencer
     */
    public function getReferencer()
    {
        return $this->referencer;
    }

    
    /**
     * @return MetafieldReference
     */
    public function getTarget()
    {
        return $this->target;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['referencer']) && $data['referencer'] !== null) {
                $instance->referencer = MetafieldReferencer::fromArray($data['referencer']);
            }
            if (isset($data['target']) && $data['target'] !== null) {
                $instance->target = MetafieldReference::fromArray($data['target']);
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
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->referencer !== null) {
                $data['referencer'] = $this->referencer->asArray();
            }
            if ($this->target !== null) {
                $data['target'] = $this->target->asArray();
            }
            return $data;
        }
}
