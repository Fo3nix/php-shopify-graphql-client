<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedExchangeLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedReturnLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedReturnShippingFee;

class ShopifyCalculatedReturn
{
    protected $exchangeLineItems;
    protected $id;
    protected $returnLineItems;
    protected $returnShippingFee;

    
    /**
     * @return ShopifyCalculatedExchangeLineItem[]
     */
    public function getExchangeLineItems()
    {
        return $this->exchangeLineItems;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyCalculatedReturnLineItem[]
     */
    public function getReturnLineItems()
    {
        return $this->returnLineItems;
    }

    
    /**
     * @return ShopifyCalculatedReturnShippingFee
     */
    public function getReturnShippingFee()
    {
        return $this->returnShippingFee;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['exchangeLineItems']) && $data['exchangeLineItems'] !== null) {
                $instance->exchangeLineItems = array_map(function($item) { return ShopifyCalculatedExchangeLineItem::fromArray($item); }, $data['exchangeLineItems']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['returnLineItems']) && $data['returnLineItems'] !== null) {
                $instance->returnLineItems = array_map(function($item) { return ShopifyCalculatedReturnLineItem::fromArray($item); }, $data['returnLineItems']);
            }
            if (isset($data['returnShippingFee']) && $data['returnShippingFee'] !== null) {
                $instance->returnShippingFee = ShopifyCalculatedReturnShippingFee::fromArray($data['returnShippingFee']);
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
            if ($this->exchangeLineItems !== null) {
                $data['exchangeLineItems'] = array_map(function($item) { return $item->asArray(); }, $this->exchangeLineItems);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->returnLineItems !== null) {
                $data['returnLineItems'] = array_map(function($item) { return $item->asArray(); }, $this->returnLineItems);
            }
            if ($this->returnShippingFee !== null) {
                $data['returnShippingFee'] = $this->returnShippingFee->asArray();
            }
            return $data;
        }
}
