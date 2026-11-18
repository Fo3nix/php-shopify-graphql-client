<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderSplitResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderSplitUserError;

/**
 * Return type for `fulfillmentOrderSplit` mutation.
 */
class ShopifyFulfillmentOrderSplitPayload
{
    protected $fulfillmentOrderSplits;
    protected $userErrors;

    
    /**
     * The result of the fulfillment order splits.
     *
     * @return ShopifyFulfillmentOrderSplitResult[]
     */
    public function getFulfillmentOrderSplits(): ?array
    {
        return $this->fulfillmentOrderSplits;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrderSplitUserError[]
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
            if (isset($data['fulfillmentOrderSplits']) && $data['fulfillmentOrderSplits'] !== null) {
                $instance->fulfillmentOrderSplits = array_map(function($item) { return ShopifyFulfillmentOrderSplitResult::fromArray($item); }, $data['fulfillmentOrderSplits']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrderSplitUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fulfillmentOrderSplits !== null) {
                $data['fulfillmentOrderSplits'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillmentOrderSplits);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
