<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionPublication;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShop;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `collectionPublish` mutation.
 */
class ShopifyCollectionPublishPayload
{
    protected $collection;
    protected $collectionPublications;
    protected $shop;
    protected $userErrors;

    
    /**
     * The published collection.
     *
     * @return ShopifyCollection
     */
    public function getCollection(): ?ShopifyCollection
    {
        return $this->collection;
    }

    
    /**
     * The channels where the collection has been published.
     *
     * @return ShopifyCollectionPublication[]
     */
    public function getCollectionPublications(): ?array
    {
        return $this->collectionPublications;
    }

    
    /**
     * The shop associated with the collection.
     *
     * @return ShopifyShop
     */
    public function getShop(): ?ShopifyShop
    {
        return $this->shop;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['collection']) && $data['collection'] !== null) {
                $instance->collection = ShopifyCollection::fromArray($data['collection']);
            }
            if (isset($data['collectionPublications']) && $data['collectionPublications'] !== null) {
                $instance->collectionPublications = array_map(function($item) { return ShopifyCollectionPublication::fromArray($item); }, $data['collectionPublications']);
            }
            if (isset($data['shop']) && $data['shop'] !== null) {
                $instance->shop = ShopifyShop::fromArray($data['shop']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->collection !== null) {
                $data['collection'] = $this->collection->asArray();
            }
            if ($this->collectionPublications !== null) {
                $data['collectionPublications'] = array_map(function($item) { return $item->asArray(); }, $this->collectionPublications);
            }
            if ($this->shop !== null) {
                $data['shop'] = $this->shop->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
