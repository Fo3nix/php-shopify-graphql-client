<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The identifier for the metafield linked to this option.
 *
 * This API is currently in early access. See [Metafield-linked product options](https://shopify.dev/docs/api/admin/migrate/new-product-model/metafield-linked) for more details.
 */
class ShopifyLinkedMetafield
{
    protected $key;
    protected $namespace;

    
    /**
     * Key of the metafield the option is linked to.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * Namespace of the metafield the option is linked to.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
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
            return $data;
        }
}
