<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;

class RefundLineItem
{
    protected $id;
    protected $lineItem;
    protected $location;
    protected $price;
    protected $priceSet;
    protected $quantity;
    protected $restockType;
    protected $restocked;
    protected $subtotal;
    protected $subtotalSet;
    protected $totalTax;
    protected $totalTaxSet;

    
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
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return MoneyBag
     */
    public function getPriceSet()
    {
        return $this->priceSet;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return RefundLineItemRestockTypeEnumObject
     */
    public function getRestockType()
    {
        return $this->restockType;
    }

    
    /**
     * @return bool
     */
    public function getRestocked()
    {
        return $this->restocked;
    }

    
    /**
     * @return string
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return MoneyBag
     */
    public function getSubtotalSet()
    {
        return $this->subtotalSet;
    }

    
    /**
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalTaxSet()
    {
        return $this->totalTaxSet;
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
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = $data['price'];
            }
            if (isset($data['priceSet']) && $data['priceSet'] !== null) {
                $instance->priceSet = MoneyBag::fromArray($data['priceSet']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['restockType']) && $data['restockType'] !== null) {
                $instance->restockType = $data['restockType'];
            }
            if (isset($data['restocked']) && $data['restocked'] !== null) {
                $instance->restocked = $data['restocked'];
            }
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = $data['subtotal'];
            }
            if (isset($data['subtotalSet']) && $data['subtotalSet'] !== null) {
                $instance->subtotalSet = MoneyBag::fromArray($data['subtotalSet']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = $data['totalTax'];
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = MoneyBag::fromArray($data['totalTaxSet']);
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
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->price !== null) {
                $data['price'] = $this->price;
            }
            if ($this->priceSet !== null) {
                $data['priceSet'] = $this->priceSet->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->restockType !== null) {
                $data['restockType'] = $this->restockType;
            }
            if ($this->restocked !== null) {
                $data['restocked'] = $this->restocked;
            }
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal;
            }
            if ($this->subtotalSet !== null) {
                $data['subtotalSet'] = $this->subtotalSet->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax;
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            return $data;
        }
}
