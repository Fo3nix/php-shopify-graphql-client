<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCollectionConnection;

class ShopifyDiscountCollections
{
    protected $collections;

    
    /**
     * @return ShopifyCollectionConnection
     */
    public function getCollections()
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
