<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrder;

/**
 * The result of splitting a fulfillment order.
 */
class ShopifyFulfillmentOrderSplitResult
{
    protected $fulfillmentOrder;
    protected $remainingFulfillmentOrder;
    protected $replacementFulfillmentOrder;

    
    /**
     * The original fulfillment order as a result of the split.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->fulfillmentOrder;
    }

    
    /**
     * The remaining fulfillment order as a result of the split.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getRemainingFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->remainingFulfillmentOrder;
    }

    
    /**
     * The replacement fulfillment order if the original fulfillment order wasn't in a state to be split.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getReplacementFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->replacementFulfillmentOrder;
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
            if (isset($data['remainingFulfillmentOrder']) && $data['remainingFulfillmentOrder'] !== null) {
                $instance->remainingFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['remainingFulfillmentOrder']);
            }
            if (isset($data['replacementFulfillmentOrder']) && $data['replacementFulfillmentOrder'] !== null) {
                $instance->replacementFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['replacementFulfillmentOrder']);
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
            if ($this->remainingFulfillmentOrder !== null) {
                $data['remainingFulfillmentOrder'] = $this->remainingFulfillmentOrder->asArray();
            }
            if ($this->replacementFulfillmentOrder !== null) {
                $data['replacementFulfillmentOrder'] = $this->replacementFulfillmentOrder->asArray();
            }
            return $data;
        }
}
