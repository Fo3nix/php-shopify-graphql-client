<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LineItem;

class ExchangeLineItem
{
    protected $id;
    protected $lineItem;
    protected $lineItems;
    protected $processableQuantity;
    protected $processedQuantity;
    protected $quantity;
    protected $unprocessedQuantity;
    protected $variantId;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    
    /**
     * @return LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return int
     */
    public function getProcessableQuantity()
    {
        return $this->processableQuantity;
    }

    
    /**
     * @return int
     */
    public function getProcessedQuantity()
    {
        return $this->processedQuantity;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return int
     */
    public function getUnprocessedQuantity()
    {
        return $this->unprocessedQuantity;
    }

    
    /**
     * @return string
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = LineItem::fromArray($data['lineItem']);
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return LineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['processableQuantity']) && $data['processableQuantity'] !== null) {
                $instance->processableQuantity = $data['processableQuantity'];
            }
            if (isset($data['processedQuantity']) && $data['processedQuantity'] !== null) {
                $instance->processedQuantity = $data['processedQuantity'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['unprocessedQuantity']) && $data['unprocessedQuantity'] !== null) {
                $instance->unprocessedQuantity = $data['unprocessedQuantity'];
            }
            if (isset($data['variantId']) && $data['variantId'] !== null) {
                $instance->variantId = $data['variantId'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->processableQuantity !== null) {
                $data['processableQuantity'] = $this->processableQuantity;
            }
            if ($this->processedQuantity !== null) {
                $data['processedQuantity'] = $this->processedQuantity;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->unprocessedQuantity !== null) {
                $data['unprocessedQuantity'] = $this->unprocessedQuantity;
            }
            if ($this->variantId !== null) {
                $data['variantId'] = $this->variantId;
            }
            return $data;
        }
}
