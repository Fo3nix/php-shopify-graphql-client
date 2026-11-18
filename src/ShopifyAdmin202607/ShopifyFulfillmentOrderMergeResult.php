<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrder;

/**
 * The result of merging a set of fulfillment orders.
 */
class ShopifyFulfillmentOrderMergeResult
{
    protected $fulfillmentOrder;

    
    /**
     * The new fulfillment order as a result of the merge.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->fulfillmentOrder;
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
            return $data;
        }
}
