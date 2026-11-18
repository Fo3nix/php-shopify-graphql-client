<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConstraintValueConnection;

/**
 * The [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions)
 * that determine what subtypes of resources a metafield definition applies to.
 */
class ShopifyMetafieldDefinitionConstraints
{
    protected $key;
    protected $values;

    
    /**
     * The category of resource subtypes that the definition applies to.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The specific constraint subtype values that the definition applies to.
     *
     * @return ShopifyMetafieldDefinitionConstraintValueConnection
     */
    public function getValues(): ?ShopifyMetafieldDefinitionConstraintValueConnection
    {
        return $this->values;
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
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = ShopifyMetafieldDefinitionConstraintValueConnection::fromArray($data['values']);
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
            if ($this->values !== null) {
                $data['values'] = $this->values->asArray();
            }
            return $data;
        }
}
