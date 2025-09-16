<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CalculatedExchangeLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CalculatedReturnLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CalculatedReturnShippingFee;

class CalculatedReturn
{
    protected $exchangeLineItems;
    protected $id;
    protected $returnLineItems;
    protected $returnShippingFee;

    
    /**
     * @return CalculatedExchangeLineItem[]
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
     * @return CalculatedReturnLineItem[]
     */
    public function getReturnLineItems()
    {
        return $this->returnLineItems;
    }

    
    /**
     * @return CalculatedReturnShippingFee
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
                $instance->exchangeLineItems = array_map(function($item) { return CalculatedExchangeLineItem::fromArray($item); }, $data['exchangeLineItems']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['returnLineItems']) && $data['returnLineItems'] !== null) {
                $instance->returnLineItems = array_map(function($item) { return CalculatedReturnLineItem::fromArray($item); }, $data['returnLineItems']);
            }
            if (isset($data['returnShippingFee']) && $data['returnShippingFee'] !== null) {
                $instance->returnShippingFee = CalculatedReturnShippingFee::fromArray($data['returnShippingFee']);
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
