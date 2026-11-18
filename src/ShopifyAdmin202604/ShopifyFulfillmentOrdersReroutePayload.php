<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentOrdersRerouteUserError;

/**
 * Return type for `fulfillmentOrdersReroute` mutation.
 */
class ShopifyFulfillmentOrdersReroutePayload
{
    protected $movedFulfillmentOrders;
    protected $userErrors;

    
    /**
     * The fulfillment orders which contains the moved line items.
     *
     * @return ShopifyFulfillmentOrder[]
     */
    public function getMovedFulfillmentOrders(): ?array
    {
        return $this->movedFulfillmentOrders;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentOrdersRerouteUserError[]
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
            if (isset($data['movedFulfillmentOrders']) && $data['movedFulfillmentOrders'] !== null) {
                $instance->movedFulfillmentOrders = array_map(function($item) { return ShopifyFulfillmentOrder::fromArray($item); }, $data['movedFulfillmentOrders']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentOrdersRerouteUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->movedFulfillmentOrders !== null) {
                $data['movedFulfillmentOrders'] = array_map(function($item) { return $item->asArray(); }, $this->movedFulfillmentOrders);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
