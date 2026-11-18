<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderCancelJobResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderCancelUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `orderCancel` mutation.
 */
class ShopifyOrderCancelPayload
{
    protected $job;
    protected $jobResult;
    protected $orderCancelUserErrors;
    protected $userErrors;

    
    /**
     * The job that asynchronously cancels the order.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
    }

    
    /**
     * The job result for tracking the order cancellation, including its `status`, any `errors`, and the affected `order`. Cancellation runs asynchronously, so query this result's `id` with the [`node`](https://shopify.dev/docs/api/admin-graphql/latest/queries/node) query until `done` is `true`.
     *
     * @return ShopifyOrderCancelJobResult
     */
    public function getJobResult(): ?ShopifyOrderCancelJobResult
    {
        return $this->jobResult;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyOrderCancelUserError[]
     */
    public function getOrderCancelUserErrors(): ?array
    {
        return $this->orderCancelUserErrors;
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
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
            }
            if (isset($data['jobResult']) && $data['jobResult'] !== null) {
                $instance->jobResult = ShopifyOrderCancelJobResult::fromArray($data['jobResult']);
            }
            if (isset($data['orderCancelUserErrors']) && $data['orderCancelUserErrors'] !== null) {
                $instance->orderCancelUserErrors = array_map(function($item) { return ShopifyOrderCancelUserError::fromArray($item); }, $data['orderCancelUserErrors']);
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
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            if ($this->jobResult !== null) {
                $data['jobResult'] = $this->jobResult->asArray();
            }
            if ($this->orderCancelUserErrors !== null) {
                $data['orderCancelUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->orderCancelUserErrors);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
