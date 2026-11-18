<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `collectionUpdate` mutation.
 */
class ShopifyCollectionUpdatePayload
{
    protected $collection;
    protected $job;
    protected $userErrors;

    
    /**
     * The updated collection.
     *
     * @return ShopifyCollection
     */
    public function getCollection(): ?ShopifyCollection
    {
        return $this->collection;
    }

    
    /**
     * The asynchronous job updating the products based on the new rule set.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
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
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
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
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
