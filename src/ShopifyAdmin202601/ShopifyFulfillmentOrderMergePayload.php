<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFulfillmentOrderMergeResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFulfillmentOrderMergeUserError;

/**
 * Return type for `fulfillmentOrderMerge` mutation.
 */
class ShopifyFulfillmentOrderMergePayload
{
    protected $fulfillmentOrderMerges;
    protected $userErrors;

    
    /**
     * The result of the fulfillment order merges.
     *
     * @return ShopifyFulfillmentOrderMergeResult[]
     */
    public function getFulfillmentOrderMerges(): ?array
    {
        return $this->fulfillmentOrderMerges;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrderMergeUserError[]
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
            if (isset($data['fulfillmentOrderMerges']) && $data['fulfillmentOrderMerges'] !== null) {
                $instance->fulfillmentOrderMerges = array_map(function($item) { return ShopifyFulfillmentOrderMergeResult::fromArray($item); }, $data['fulfillmentOrderMerges']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrderMergeUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fulfillmentOrderMerges !== null) {
                $data['fulfillmentOrderMerges'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillmentOrderMerges);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
