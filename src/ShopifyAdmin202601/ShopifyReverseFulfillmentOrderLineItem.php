<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReverseFulfillmentOrderDisposition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFulfillmentLineItem;

/**
 * The details about a reverse fulfillment order line item.
 */
class ShopifyReverseFulfillmentOrderLineItem implements ShopifyNode
{
    protected $dispositions;
    protected $fulfillmentLineItem;
    protected $id;
    protected $totalQuantity;

    
    /**
     * The dispositions of the item.
     *
     * @return ShopifyReverseFulfillmentOrderDisposition[]
     */
    public function getDispositions(): ?array
    {
        return $this->dispositions;
    }

    
    /**
     * The corresponding fulfillment line item for a reverse fulfillment order line item.
     *
     * @return ShopifyFulfillmentLineItem
     */
    public function getFulfillmentLineItem(): ?ShopifyFulfillmentLineItem
    {
        return $this->fulfillmentLineItem;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The total number of units to be processed.
     *
     * @return int
     */
    public function getTotalQuantity(): ?int
    {
        return $this->totalQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['dispositions']) && $data['dispositions'] !== null) {
                $instance->dispositions = array_map(function($item) { return ShopifyReverseFulfillmentOrderDisposition::fromArray($item); }, $data['dispositions']);
            }
            if (isset($data['fulfillmentLineItem']) && $data['fulfillmentLineItem'] !== null) {
                $instance->fulfillmentLineItem = ShopifyFulfillmentLineItem::fromArray($data['fulfillmentLineItem']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['totalQuantity']) && $data['totalQuantity'] !== null) {
                $instance->totalQuantity = $data['totalQuantity'];
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
            if ($this->dispositions !== null) {
                $data['dispositions'] = array_map(function($item) { return $item->asArray(); }, $this->dispositions);
            }
            if ($this->fulfillmentLineItem !== null) {
                $data['fulfillmentLineItem'] = $this->fulfillmentLineItem->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->totalQuantity !== null) {
                $data['totalQuantity'] = $this->totalQuantity;
            }
            return $data;
        }
}
