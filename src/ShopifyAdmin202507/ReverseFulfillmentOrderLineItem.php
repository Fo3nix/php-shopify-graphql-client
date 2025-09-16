<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseFulfillmentOrderDisposition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentLineItem;

class ReverseFulfillmentOrderLineItem
{
    protected $dispositions;
    protected $fulfillmentLineItem;
    protected $id;
    protected $totalQuantity;

    
    /**
     * @return ReverseFulfillmentOrderDisposition[]
     */
    public function getDispositions()
    {
        return $this->dispositions;
    }

    
    /**
     * @return FulfillmentLineItem
     */
    public function getFulfillmentLineItem()
    {
        return $this->fulfillmentLineItem;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantity()
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
                $instance->dispositions = array_map(function($item) { return ReverseFulfillmentOrderDisposition::fromArray($item); }, $data['dispositions']);
            }
            if (isset($data['fulfillmentLineItem']) && $data['fulfillmentLineItem'] !== null) {
                $instance->fulfillmentLineItem = FulfillmentLineItem::fromArray($data['fulfillmentLineItem']);
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
