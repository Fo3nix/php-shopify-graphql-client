<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseFulfillmentOrderDisposition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseFulfillmentOrderLineItem;

class ReverseDeliveryLineItem
{
    protected $dispositions;
    protected $id;
    protected $quantity;
    protected $reverseFulfillmentOrderLineItem;

    
    /**
     * @return ReverseFulfillmentOrderDisposition[]
     */
    public function getDispositions()
    {
        return $this->dispositions;
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return ReverseFulfillmentOrderLineItem
     */
    public function getReverseFulfillmentOrderLineItem()
    {
        return $this->reverseFulfillmentOrderLineItem;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['reverseFulfillmentOrderLineItem']) && $data['reverseFulfillmentOrderLineItem'] !== null) {
                $instance->reverseFulfillmentOrderLineItem = ReverseFulfillmentOrderLineItem::fromArray($data['reverseFulfillmentOrderLineItem']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->reverseFulfillmentOrderLineItem !== null) {
                $data['reverseFulfillmentOrderLineItem'] = $this->reverseFulfillmentOrderLineItem->asArray();
            }
            return $data;
        }
}
