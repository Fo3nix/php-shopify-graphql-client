<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFulfillmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFulfillmentOrderRescheduleUserError;

/**
 * Return type for `fulfillmentOrderReschedule` mutation.
 */
class ShopifyFulfillmentOrderReschedulePayload
{
    protected $fulfillmentOrder;
    protected $userErrors;

    
    /**
     * A fulfillment order with the rescheduled line items.
     *
     * Fulfillment orders may be merged if they have the same `fulfillAt` datetime.
     *
     * If the fulfillment order is merged then the resulting fulfillment order will be returned.
     * Otherwise the original fulfillment order will be returned with an updated `fulfillAt` datetime.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->fulfillmentOrder;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrderRescheduleUserError[]
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
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrderRescheduleUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
