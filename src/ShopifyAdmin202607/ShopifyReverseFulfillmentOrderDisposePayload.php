<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseFulfillmentOrderLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnUserError;

/**
 * Return type for `reverseFulfillmentOrderDispose` mutation.
 */
class ShopifyReverseFulfillmentOrderDisposePayload
{
    protected $reverseFulfillmentOrderLineItems;
    protected $userErrors;

    
    /**
     * The disposed reverse fulfillment order line items.
     *
     * @return ShopifyReverseFulfillmentOrderLineItem[]
     */
    public function getReverseFulfillmentOrderLineItems(): ?array
    {
        return $this->reverseFulfillmentOrderLineItems;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyReturnUserError[]
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
            if (isset($data['reverseFulfillmentOrderLineItems']) && $data['reverseFulfillmentOrderLineItems'] !== null) {
                $instance->reverseFulfillmentOrderLineItems = array_map(function($item) { return ShopifyReverseFulfillmentOrderLineItem::fromArray($item); }, $data['reverseFulfillmentOrderLineItems']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyReturnUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->reverseFulfillmentOrderLineItems !== null) {
                $data['reverseFulfillmentOrderLineItems'] = array_map(function($item) { return $item->asArray(); }, $this->reverseFulfillmentOrderLineItems);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
