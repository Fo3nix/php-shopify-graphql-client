<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrderCancelError;

/**
 * Return type for `fulfillmentOrderCancel` mutation.
 */
class ShopifyFulfillmentOrderCancelPayload
{
    protected $fulfillmentOrder;
    protected $replacementFulfillmentOrder;
    protected $userErrors;

    
    /**
     * The fulfillment order that was marked as canceled.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->fulfillmentOrder;
    }

    
    /**
     * The fulfillment order that was created to replace the canceled fulfillment order.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getReplacementFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->replacementFulfillmentOrder;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrderCancelError[]
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
            if (isset($data['fulfillmentOrder']) && $data['fulfillmentOrder'] !== null) {
                $instance->fulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['fulfillmentOrder']);
            }
            if (isset($data['replacementFulfillmentOrder']) && $data['replacementFulfillmentOrder'] !== null) {
                $instance->replacementFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['replacementFulfillmentOrder']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrderCancelError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fulfillmentOrder !== null) {
                $data['fulfillmentOrder'] = $this->fulfillmentOrder->asArray();
            }
            if ($this->replacementFulfillmentOrder !== null) {
                $data['replacementFulfillmentOrder'] = $this->replacementFulfillmentOrder->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
