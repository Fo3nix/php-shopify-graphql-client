<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFulfillmentLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCalculatedRestockingFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;

class ShopifyCalculatedReturnLineItem
{
    protected $fulfillmentLineItem;
    protected $id;
    protected $quantity;
    protected $restockingFee;
    protected $subtotalBeforeOrderDiscountsSet;
    protected $subtotalSet;
    protected $totalTaxSet;

    
    /**
     * @return ShopifyFulfillmentLineItem
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return ShopifyCalculatedRestockingFee
     */
    public function getRestockingFee()
    {
        return $this->restockingFee;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalBeforeOrderDiscountsSet()
    {
        return $this->subtotalBeforeOrderDiscountsSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getSubtotalSet()
    {
        return $this->subtotalSet;
    }

    
    /**
     * @return ShopifyMoneyBag
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
            if (isset($data['fulfillmentLineItem']) && $data['fulfillmentLineItem'] !== null) {
                $instance->fulfillmentLineItem = ShopifyFulfillmentLineItem::fromArray($data['fulfillmentLineItem']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['restockingFee']) && $data['restockingFee'] !== null) {
                $instance->restockingFee = ShopifyCalculatedRestockingFee::fromArray($data['restockingFee']);
            }
            if (isset($data['subtotalBeforeOrderDiscountsSet']) && $data['subtotalBeforeOrderDiscountsSet'] !== null) {
                $instance->subtotalBeforeOrderDiscountsSet = ShopifyMoneyBag::fromArray($data['subtotalBeforeOrderDiscountsSet']);
            }
            if (isset($data['subtotalSet']) && $data['subtotalSet'] !== null) {
                $instance->subtotalSet = ShopifyMoneyBag::fromArray($data['subtotalSet']);
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->restockingFee !== null) {
                $data['restockingFee'] = $this->restockingFee->asArray();
            }
            if ($this->subtotalBeforeOrderDiscountsSet !== null) {
                $data['subtotalBeforeOrderDiscountsSet'] = $this->subtotalBeforeOrderDiscountsSet->asArray();
            }
            if ($this->subtotalSet !== null) {
                $data['subtotalSet'] = $this->subtotalSet->asArray();
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            return $data;
        }
}
