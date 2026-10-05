<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyJob;

class ShopifyCollectionDuplicateOperation
{
    protected $collectionRole;
    protected $job;

    
    /**
     * @return ShopifyCollectionDuplicateOperationRoleEnumObject
     */
    public function getCollectionRole()
    {
        return $this->collectionRole;
    }

    
    /**
     * @return ShopifyJob
     */
    public function getJob()
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
