<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyJob;

/**
 * Represents an in-progress collection duplication operation. Collection duplication is a synchronous operation for simple collections, and an asynchronous operation for collections containing too many products to process synchronously.
 */
class ShopifyCollectionDuplicateOperation
{
    protected $collectionRole;
    protected $job;

    
    /**
     * Whether the collection is the source that products are being duplicated from, or the target collection that products are being duplicated onto.
     *
     * @return string A ShopifyCollectionDuplicateOperationRoleEnumObject value
     */
    public function getCollectionRole(): ?string
    {
        return $this->collectionRole;
    }

    
    /**
     * The background job performing the duplication.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['collectionRole']) && $data['collectionRole'] !== null) {
                $instance->collectionRole = $data['collectionRole'];
            }
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
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
            if ($this->collectionRole !== null) {
                $data['collectionRole'] = $this->collectionRole;
            }
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            return $data;
        }
}
