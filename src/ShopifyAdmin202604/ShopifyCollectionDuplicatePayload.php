<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCollection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCollectionDuplicateUserError;

/**
 * Return type for `collectionDuplicate` mutation.
 */
class ShopifyCollectionDuplicatePayload
{
    protected $collection;
    protected $job;
    protected $userErrors;

    
    /**
     * The newly created duplicate collection. Will contain all data if duplication completed synchronously.
     * If async processing is required, the collection will be created but products will be added in the background
     * and can be tracked via the job field or the collection's active_operations field.
     *
     * @return ShopifyCollection
     */
    public function getCollection(): ?ShopifyCollection
    {
        return $this->collection;
    }

    
    /**
     * The background job copying manually included products onto the target collection. Only returned if async processing is required, otherwise products will be copied synchronously when the collection is created.
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
     * @return ShopifyCollectionDuplicateUserError[]
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
                $instance->userErrors = array_map(function($item) { return ShopifyCollectionDuplicateUserError::fromArray($item); }, $data['userErrors']);
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
