<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentHold;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentOrderHoldUserError;

/**
 * Return type for `fulfillmentOrderHold` mutation.
 */
class ShopifyFulfillmentOrderHoldPayload
{
    protected $fulfillmentHold;
    protected $fulfillmentOrder;
    protected $remainingFulfillmentOrder;
    protected $userErrors;

    
    /**
     * The fulfillment hold created for the fulfillment order. Null if no hold was created.
     *
     * @return ShopifyFulfillmentHold
     */
    public function getFulfillmentHold(): ?ShopifyFulfillmentHold
    {
        return $this->fulfillmentHold;
    }

    
    /**
     * The fulfillment order on which a fulfillment hold was applied.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->fulfillmentOrder;
    }

    
    /**
     * The remaining fulfillment order containing the line items to which the hold wasn't applied,
     * if specific line items were specified to be placed on hold.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getRemainingFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->remainingFulfillmentOrder;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrderHoldUserError[]
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
            if (isset($data['fulfillmentHold']) && $data['fulfillmentHold'] !== null) {
                $instance->fulfillmentHold = ShopifyFulfillmentHold::fromArray($data['fulfillmentHold']);
            }
            if (isset($data['fulfillmentOrder']) && $data['fulfillmentOrder'] !== null) {
                $instance->fulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['fulfillmentOrder']);
            }
            if (isset($data['remainingFulfillmentOrder']) && $data['remainingFulfillmentOrder'] !== null) {
                $instance->remainingFulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['remainingFulfillmentOrder']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrderHoldUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fulfillmentHold !== null) {
                $data['fulfillmentHold'] = $this->fulfillmentHold->asArray();
            }
            if ($this->fulfillmentOrder !== null) {
                $data['fulfillmentOrder'] = $this->fulfillmentOrder->asArray();
            }
            if ($this->remainingFulfillmentOrder !== null) {
                $data['remainingFulfillmentOrder'] = $this->remainingFulfillmentOrder->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
