<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionConnection;

/**
 * A list of collections that the discount can have as a prerequisite or a list of collections to which the discount can be applied.
 */
class ShopifyDiscountCollections
{
    protected $collections;

    
    /**
     * The list of collections that the discount can have as a prerequisite or the list of collections to which the discount can be applied.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
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
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            return $data;
        }
}
