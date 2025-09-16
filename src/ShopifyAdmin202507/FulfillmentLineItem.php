<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LineItem;

class FulfillmentLineItem
{
    protected $discountedTotal;
    protected $discountedTotalSet;
    protected $id;
    protected $lineItem;
    protected $originalTotal;
    protected $originalTotalSet;
    protected $quantity;

    
    /**
     * @return string
     */
    public function getDiscountedTotal()
    {
        return $this->discountedTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getDiscountedTotalSet()
    {
        return $this->discountedTotalSet;
    }

    
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
     * @return string
     */
    public function getOriginalTotal()
    {
        return $this->originalTotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalTotalSet()
    {
        return $this->originalTotalSet;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
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
            if (isset($data['discountedTotal']) && $data['discountedTotal'] !== null) {
                $instance->discountedTotal = $data['discountedTotal'];
            }
            if (isset($data['discountedTotalSet']) && $data['discountedTotalSet'] !== null) {
                $instance->discountedTotalSet = MoneyBag::fromArray($data['discountedTotalSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItem']) && $data['lineItem'] !== null) {
                $instance->lineItem = LineItem::fromArray($data['lineItem']);
            }
            if (isset($data['originalTotal']) && $data['originalTotal'] !== null) {
                $instance->originalTotal = $data['originalTotal'];
            }
            if (isset($data['originalTotalSet']) && $data['originalTotalSet'] !== null) {
                $instance->originalTotalSet = MoneyBag::fromArray($data['originalTotalSet']);
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
            if ($this->discountedTotal !== null) {
                $data['discountedTotal'] = $this->discountedTotal;
            }
            if ($this->discountedTotalSet !== null) {
                $data['discountedTotalSet'] = $this->discountedTotalSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItem !== null) {
                $data['lineItem'] = $this->lineItem->asArray();
            }
            if ($this->originalTotal !== null) {
                $data['originalTotal'] = $this->originalTotal;
            }
            if ($this->originalTotalSet !== null) {
                $data['originalTotalSet'] = $this->originalTotalSet->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            return $data;
        }
}
