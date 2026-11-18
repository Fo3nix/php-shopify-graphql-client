<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentLineItem;

/**
 * A returnable fulfillment line item.
 */
class ShopifyReturnableFulfillmentLineItem
{
    protected $fulfillmentLineItem;
    protected $quantity;

    
    /**
     * The fulfillment line item that can be returned.
     *
     * @return ShopifyFulfillmentLineItem
     */
    public function getFulfillmentLineItem(): ?ShopifyFulfillmentLineItem
    {
        return $this->fulfillmentLineItem;
    }

    
    /**
     * The quantity available to be returned.
     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fulfillmentLineItem']) && $data['fulfillmentLineItem'] !== null) {
                $instance->fulfillmentLineItem = ShopifyFulfillmentLineItem::fromArray($data['fulfillmentLineItem']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
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
            if ($this->fulfillmentLineItem !== null) {
                $data['fulfillmentLineItem'] = $this->fulfillmentLineItem->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            return $data;
        }
}
