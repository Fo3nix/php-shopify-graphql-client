<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerMergeError;

/**
 * A merge request for merging two customers.
 */
class ShopifyCustomerMergeRequest
{
    protected $customerMergeErrors;
    protected $jobId;
    protected $resultingCustomerId;
    protected $status;

    
    /**
     * The merge errors that occurred during the customer merge request.
     *
     * @return ShopifyCustomerMergeError[]
     */
    public function getCustomerMergeErrors(): ?array
    {
        return $this->customerMergeErrors;
    }

    
    /**
     * The UUID of the merge job.
     *
     * @return string
     */
    public function getJobId(): ?string
    {
        return $this->jobId;
    }

    
    /**
     * The ID of the customer that was kept after the merge. Treat this ID as authoritative.
     *
     * @return string
     */
    public function getResultingCustomerId(): ?string
    {
        return $this->resultingCustomerId;
    }

    
    /**
     * The status of the customer merge request.
     *
     * @return string A ShopifyCustomerMergeRequestStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerMergeErrors']) && $data['customerMergeErrors'] !== null) {
                $instance->customerMergeErrors = array_map(function($item) { return ShopifyCustomerMergeError::fromArray($item); }, $data['customerMergeErrors']);
            }
            if (isset($data['jobId']) && $data['jobId'] !== null) {
                $instance->jobId = $data['jobId'];
            }
            if (isset($data['resultingCustomerId']) && $data['resultingCustomerId'] !== null) {
                $instance->resultingCustomerId = $data['resultingCustomerId'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->customerMergeErrors !== null) {
                $data['customerMergeErrors'] = array_map(function($item) { return $item->asArray(); }, $this->customerMergeErrors);
            }
            if ($this->jobId !== null) {
                $data['jobId'] = $this->jobId;
            }
            if ($this->resultingCustomerId !== null) {
                $data['resultingCustomerId'] = $this->resultingCustomerId;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
