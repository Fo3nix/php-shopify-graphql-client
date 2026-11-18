<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCustomerMergeUserError;

/**
 * Return type for `customerMerge` mutation.
 */
class ShopifyCustomerMergePayload
{
    protected $job;
    protected $resultingCustomerId;
    protected $userErrors;

    
    /**
     * The asynchronous job for merging the customers.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
    }

    
    /**
     * The ID of the customer that's kept after the merge. Treat this ID as authoritative.
     *
     * @return string
     */
    public function getResultingCustomerId(): ?string
    {
        return $this->resultingCustomerId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCustomerMergeUserError[]
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
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
            }
            if (isset($data['resultingCustomerId']) && $data['resultingCustomerId'] !== null) {
                $instance->resultingCustomerId = $data['resultingCustomerId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCustomerMergeUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            if ($this->resultingCustomerId !== null) {
                $data['resultingCustomerId'] = $this->resultingCustomerId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
