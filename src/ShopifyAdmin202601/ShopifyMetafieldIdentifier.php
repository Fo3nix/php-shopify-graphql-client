<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Identifies a metafield by its owner resource, namespace, and key.
 */
class ShopifyMetafieldIdentifier
{
    protected $key;
    protected $namespace;
    protected $ownerId;

    
    /**
     * The key of the metafield.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The namespace of the metafield.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    
    /**
     * GID of the owner resource that the metafield belongs to.
     *
     * @return string
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
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
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['ownerId']) && $data['ownerId'] !== null) {
                $instance->ownerId = $data['ownerId'];
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
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->ownerId !== null) {
                $data['ownerId'] = $this->ownerId;
            }
            return $data;
        }
}
